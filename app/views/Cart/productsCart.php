<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<title></title>

    <?php include 'app\views\header.php'; ?>


	<CENter><H1>Products in cart</H1></CENter>
</head>
<body>
  


<center><table id="example" class="table table-striped" style="width:50%"></center>
        <thead>
            <tr>
                <th>Title</th>
				<th>Image</th>
                <th>Price</th>
                <th>Description</th>
				<th>Delete</th>
				
            </tr>
        </thead>
        <tbody>
        <?php  foreach ($data as $item) {
                
					echo 
                    "<tr>
					<td>$item->title</td>
					<td><img src=/Images/$item->picture width=100 height=100 ></td>
					<td>$item->price$</td>
					<td>$item->description</td>
					<td><a type=submit class=remove href='/Cart/delete/$item->cart_id'>Remove</a></td>

                    </tr>";
                }
				?>
           
        </tbody>
        
    </table>

 <button name="action" type="submit" class="btn btn-dark">Place Order</button>

      
    </body>
</html>
							
