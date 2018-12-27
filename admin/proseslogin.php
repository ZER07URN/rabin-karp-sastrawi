<?php

include "../config/koneksi.php";
error_reporting(0);
 $_POST[username];
 $pass=md5($_POST[password]);
      $sa = $conn->query("SELECT * FROM admin WHERE username='$_POST[username]' AND password='$pass'");
      $r=$sa->fetch_array();
      $jml=$sa->num_rows;
//echo $jml;


// Apabila username dan password ditemukan
if ($jml > 0){
  session_start();
$_SESSION['namauser']     = $r["username"];
  $_SESSION['passuser']     = $r["password"];
header('location:index.php?app=home');
}
else{
  echo "<script>window.alert('Username atau Password Salah!!!');
        window.location=('login.php')</script>";
}
?>