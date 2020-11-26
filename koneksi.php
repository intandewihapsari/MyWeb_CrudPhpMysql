<?php
  $host = "localhost"; 
  $user = "id15497774_dewi";
  $pass = "\Kw>S{u|Iw!sz6z_";
  $nama_db = "id15497774_intan"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); 
  //pastikan urutan nya seperti ini, jangan tertukar

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>