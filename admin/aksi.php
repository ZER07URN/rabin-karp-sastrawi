<?php
session_start();
//error_reporting(0);
include "../config/koneksi.php";
include "../config/function.php";


$app=$_GET[app];
$act=$_GET[act];
if($app=="abstrak" AND $act=="tambah"){
    $id=1;
    $pengaturan = $conn->query("SELECT * from pengaturan where id='$id'");
    $getdata=$pengaturan->fetch_array();
    $kgram=$getdata['kgram']; 
    $prima=$getdata['prima']; 
    $judul=$_POST["judul"];
    $abstrak=strip_tags($_POST["abstrak"]);
    $form = $abstrak;
    $tokenizing=strip_stopwords(clean($form));                    
    $steaming = explode(' ',($tokenizing));
    $output   = $stemmer->stem($tokenizing);
    $x= katahubung($output); 
    $bacangram =getNgrams("$x","$kgram","$prima");  
    $columns = implode(",",array_keys($bacangram));
    $escaped_values = array_map('mysql_real_escape_string', array_values($bacangram));
    $values  = implode(",", $escaped_values);
    
    
    $digits = 4;
    $randomid =  str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
    $conn->query("insert into abstrak_asli(id,judul,abstrak) values('$randomid','$judul','$abstrak')");
    $conn->query("insert into abstrak_uji(id,judul,abstrak) values('$randomid','$judul','$values')");
    header('location:index.php?app=abstrak');

} else if($app=="abstrak" AND $act=="ubah") {
    $id=1;
    $pengaturan = $conn->query("SELECT * from pengaturan where id='$id'");
    $getdata=$pengaturan->fetch_array();
    $kgram=$getdata['kgram']; 
    $prima=$getdata['prima']; 
    $idku=$_POST["id"];
    $judul=$_POST["judul"];
    $abstrak=strip_tags($_POST["abstrak"]);
    
    $form = $abstrak;
    $tokenizing=strip_stopwords(clean($form));                    
    $steaming = explode(' ',($tokenizing));
    $output   = $stemmer->stem($tokenizing);
    $x= katahubung($output); 
    $bacangram =getNgrams("$x","$kgram","$prima");  
    $columns = implode(",",array_keys($bacangram));
    $escaped_values = array_map('mysql_real_escape_string', array_values($bacangram));
    $values  = implode(",", $escaped_values);
    $conn->query("update abstrak_asli set judul='$judul',abstrak='$abstrak' where id='$idku'");
    $conn->query("update abstrak_uji set judul='$judul',abstrak='$values' where id='$idku'");
     header('location:index.php?app=abstrak');
}
 else if($app=="abstrak" AND $act=="hapus") {
     $idku=$_GET['id'];
     $conn->query("delete from abstrak_asli where id='$idku'");
     $conn->query("delete from abstrak_uji where id='$idku'");
     header('location:index.php?app=abstrak');
 }

 else if($app=="pengaturan" AND $act=="ubah") {
        $kgram=$_POST['kgram']; 
        $prima=$_POST['prima']; 
        $idsetting=$_POST['id'];
      $sa = $conn->query("SELECT * from abstrak_asli");
      $jml=$sa->num_rows;
//     echo $jml;
      foreach ($sa as $value) {
           $idku=$value["id"];
           $judul=$value["judul"];
           $abstrak=$value["abstrak"];
           $form = $abstrak;
            $tokenizing=strip_stopwords(clean($form));                    
            $steaming = explode(' ',($tokenizing));
            $output   = $stemmer->stem($tokenizing);
            $x= katahubung($output); 
//            $x= katahubung($tokenizing); 
            $bacangram =getNgrams("$x","$kgram","$prima");  
            $columns = implode(",",array_keys($bacangram));
            $escaped_values = array_map('mysql_real_escape_string', array_values($bacangram));
            $values  = implode(",", $escaped_values);
           $conn->query("update abstrak_uji set judul='$judul',abstrak='$values' where id='$idku'");
//           $conn->query("insert into abstrak_uji(id,judul,abstrak) values('$idku','$judul','$values')");
      }
      $conn->query("update pengaturan set kgram='$kgram',prima='$prima' where id='$idsetting'"); 
      header('location:index.php?app=pengaturan');
 }
 else if($app=="admin" AND $act=="ubah") {
     $idku=$_POST['id'];
     $nama = $_POST['nama'];
     $password =$_POST['password'];
     if(empty($password)){
         $conn->query("update admin set nama='$nama' where id='$idku'");
          header('location:index.php?app=admin');
     }
     else{
         $newpwd=md5($password);
         $conn->query("update admin set nama='$nama', password='$newpwd'  where id='$idku'");
          header('location:index.php?app=admin');
     }
 }