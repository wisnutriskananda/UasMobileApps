<?php
 include 'Conn.php';

 $id=$_POST['id_customer'];
 $connect->query("DELETE FROM entitas_customer WHERE id=".$id_customer);

?>