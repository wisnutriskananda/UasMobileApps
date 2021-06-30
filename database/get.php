<?php
include 'Conn.php';

$queryResult=$connect->query("SELECT * FROM entitas_customer");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
 $result[]=$fetchData;
}

echo json_encode($result)

?>