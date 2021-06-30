<?php
 include 'Conn.php';

 $id_customer = $_POST['id_customer'];
 $nama_customer= $_POST['nama_customer'];
 $gender = $_POST['gender'];
 $posisi_customer = $_POST['posisi_customer'];
 $keluhan = $_POST['keluhan'];
 $alamat_customer = $_POST['alamat_customer'];

 $connect->query("INSERT INTO entitas_customer (id_customer,nama_customer,gender,posisi_customer,keluhan,alamat_customer) VALUES('".$itemcode."','".$id_cust."','".$nama_cust."','".$email_cust."','".$no_tlp_cust."','".$alamat_cust."','".jenis_kelamin."')")
?>