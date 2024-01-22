<?php 
require "db.php";
include "nav.php";

$name = $_GET['p_name'];


$sql="SELECT * from products WHERE name='$name' ";
$read=mysqli_query($conec,$sql);

$_SESSION['pname'] = $_GET['p_name'];

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="web.css">
        <title>Search</title>
	</head>
	<body>
        <div id="search_wrapper">
        <h1>Search for second hand product here</h1>
        <form id="product" action="search.php" method="get">
            <table id="search" border="1px">
            
                <tr>
                    <td>Name:	</td>
                    <td colspan="3"><input type="text"  name="p_name" value="<?php if(isset($_SESSION['pname'])){echo $_SESSION['pname'];}?>"></td>
                </tr>

            <tr>
                <td></td>
                <td colspan="3" id="bn"><button type="submit" name="btn">product search</button></td>
            </tr>
            <tr>
                <td>name</td>
                <td>image</td>
                <td>price</td>
                <td>description</td>
            </tr>
            <tr>
                <?php
                    while($data=mysqli_fetch_array($read)){
                        echo "\t<tr><td>".$data['name']."</td><td>"."<img src='backend/".$data['image']."'>"."</td><td>".$data['price']."</td>"."<td>".$data['description']."</td></tr>\n";
                    }
                ?>
            </tr>

            </table>
        </form>
        
        </div>
    <?php
        include 'footer.php';
    ?>
</body>
</html>


