<?php
namespace app\filters;

#[\Attribute]
class MainUser extends \app\core\AccessFilter{
	public function execute(){
		header('Main/index');
		return true;
	}
}