<?php 

	$link = mysqli_connect('localhost', 'root', '', 'test2');
	mysqli_set_charset($link, "utf8") or die('Не установлена кодировка');
	if(mysqli_connect_errno())
	{
		echo 'Ошибка в подклюении к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error() ;
		exit();
	}


$row = "SELECT * FROM `countries`";
$row2 = "SELECT * FROM `cities`";

$result = mysqli_query($link, $row);
$result2 = mysqli_query($link, $row2);

$data = array();
while($row = mysqli_fetch_assoc($result)) {
	$data[] = $row;
}

$data2 = array();
while($row2 = mysqli_fetch_array($result2)) {
	$data2[] = $row2;
}

?>

<!-- <table border="1">
<?php foreach($data2 as $item2) : ?>
<tr>
		<td><?=$item2['id']?></td>
		<td><?=$item2['citi']?></td>
		
			
</tr>
<?php endforeach; ?>
</table>  -->

<!-- // $row = mysqli_fetch_array($result);
// print_r($row);

// $row = mysqli_fetch_assoc($result);
// print_r($row); -->



<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Country</title>
  </head>
  <body>
     
	<nav class="navbar navbar-expand-lg navbar-light bg-light">	  
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto"> 
	      
	      <li class="nav-item dropdown-submenu">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Countries
	        </a>
	       
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	        	<?php foreach($data as $item) : ?>
	          		<a class="dropdown-item nav-link" href="#" data-toggle="dropdown"><?=$item['country']?></a>	
	          	<?php endforeach; ?>
	          	<?php foreach($data2 as $item2) : ?>
	          		<ul class="dropdown-menu">                      
            			<li><a class="dropdown-item nav-link" href="#" data-toggle="dropdown"><?=$item2['citi']?></a>	
            			</li>         
                
          			</ul>
          		<?php endforeach; ?>
	        </div>
	      </li>
	      
	    </ul>

	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html> 
 


