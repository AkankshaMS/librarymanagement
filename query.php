<!DOCTYPE html>
<html>
<head>
	<title>Project DBMS</title>
<center><h1><span style="background-color: #00aaff">ENTER YOUR QUERIES HERE</h1></span></center>
<link rel="stylesheet" type="text/css" href="myframe.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>
body {
        background-image: url("assets/img/backk.jpg ");
} 
 
</style>
 
</head>
 
<body>
 
</body>
<style>
.button {
  background-color: #66a3ff;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style><center>
<form action="" method="post">
    <table class=res ><tr><td colspan="3"><input type="text" name="QueryEntry" /></td><td></td><td></td><td>
	<button type="submit" class="button" name="submit"><i class="fa fa-send"></i>SUBMIT</button></td>
    </tr>
	</table>
</form>
</center>
</body>
</html>

<?php
include 'connect.php';
if($_POST)
{

$sql = $_POST['QueryEntry'];
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = mysqli_fetch_array($result)){
    echo '<br><br><center><table class=res border=1 bgcolor="white"><tr>';
    foreach($row as $key  => $value)
    	if(!is_numeric($key))
			echo '<th>'.$key.'</th>';    	
	echo "</tr>";
    
    $result = $conn->query($sql);


    foreach($result->fetch_all(MYSQLI_ASSOC) as $row) {
    	  echo '<tr>'; 
          foreach($row as $key  => $value) {
             echo '<td>' . $value . '</td>';
         }
         echo "</tr>";
    }
    echo '</table>';
echo '</center>';
}


} else {
    echo "No results";
}

}
//$conn->close();
?>

