<?php
require 'connect.php';
//$post=$_POST;
//$sql=sprintf("INSERT INTO items (title,description) VALUES('%s','%s')",$_POST['item'],$_POST['descirption']);
//$result=$mysqli->query($sql);
$sql = "SELECT * from items order by id desc";
$result=$mysqli->query($sql);
while($row=$result->fetch_assoc()){
  $json[] = $row;
}
$data['data']=$json;
$data['total'] = $result->num_rows;

echo json_encode($data);
 ?>
