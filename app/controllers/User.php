<?php
namespace app\controllers;

class User extends \app\core\Controller{
	//log users in here
	public function index(){
		if(isset($_POST['action'])){
			//select the user record as per the request
			$user = new \app\models\User();
			$user = $user->get($_POST['username']);
			//verify the password match
			if(password_verify($_POST['password'], $user->password_hash)){
				//correct password provided
				$_SESSION['username'] = $user->username;
				$_SESSION['user_id'] = $user->user_id;
				$_SESSION['role'] = $user->role;
				$_SESSION['secret_key']=$user->secret_key;
				header('location:/User/account');
			}else{
				//incorret password provided
				header('location:/User/index?error=Incorrect username/password combination!');
			}
		}else{
			$this->view('User/index');
		}
	}

	public function check2fa(){
		if(!isset($_SESSION['user_id'])) header('location:/User/index');
		if(isset($_POST['action'])){
			$currentcode =$_POST['currentcode'];
			if(\app\core\TokenAuth6238::verify(
				$_SESSION['secret_key'],$currentcode)){
				$_SESSION['secret_key']=null;
				header("location:/User/account");
			}
		}else{
			$this->view('User/check2fa');
		}
	}

	public function logout(){
		session_destroy();
		header('location:/User/index?message=You\'ve been successfully logged out.');
	}

	public function register(){
		//when we submit the form
		if(isset($_POST['action'])){
			//verify that the password and password_confirmation match
			if($_POST['password'] == $_POST['password_confirmation']){

				$user = new \app\models\User();

				if($user->get($_POST['username'])){
					//redirect with an error message
					header('location:/User/register?error=The username "'.$_POST['username'].'" already exists. Choose another.');
				}else{
					$user->username = $_POST['username'];
					$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

					$_SESSION['user_id'] = $user->insert();
					$_SESSION['username'] = $_POST['username'];

					header('location:/profile/create?message=Create profile To Have Access to reviews/product functionality');
				}
				else{
					header('location:/User/register?error=Passwords do not match.');
				}
			}
		}else{
			$this->view('User/register');
		}
	} 

	#[\app\filters\Login]
	public function twofasetup(){
		if(isset($_POST['action'])){
			$currentcode = $_POST['currentCode'];
			if(\app\core\TokenAuth6238::verify(
			$_SESSION['secretkey'],$currentcode)){
			//the user has verified their proper 2-factor authentication setup
			$user = new \App\models\User();
			$user->user_id = $_SESSION['user_id'];
			$user->secret_key = $_SESSION['secretkey'];
			$user->update2fa();
			header('location:/Somewhere***');
			}else{
				header('location:/User/twofasetup?error=token not verified!');//reload
			}
		}else{
			$secretkey = \app\core\TokenAuth6238::generateRandomClue();
			$_SESSION['secretkey'] = $secretkey;
			$url = \App\core\TokenAuth6238::getLocalCodeUrl(
				$_SESSION['username'],
				'Example.com',
				$secretkey,
				'Awesome Example App');
			$this->view('User/twofasetup', $url);
		}
	}

	public function makeQRCode(){
		$data = $_GET['data'];
		\QRcode::png($data);
	}

	public function update2fa(){
		$SQL = "UPDATE user SET secret_key=:secret_key WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['secret_key'=>$this->secret_key,
						'user_id'=>$this->user_id]);
	}
}