<style>
td {
	padding:5px;
}
</style>

<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, 'rabinkarp');
function bacaHTML($url){
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}


include "../config/function.php";

#ganti link halaman
$kode = bacaHTML('http://ojs.amikom.ac.id/index.php/semnasteknomedia/issue/view/68');

$pecah = explode('<td class="tocArticleTitleAuthors">', $kode);
$jumlah = count($pecah);
echo "<table border='1px'>";
for($i=1;$i<3;$i++) {
	$pecah1 = explode('<div class="tocAuthors">', $pecah[$i]);
	$pecah2 = explode('<a href="', $pecah1[0]);
	$pecah3 = explode('">', $pecah2[1]);
	$judul_kt = explode('</a>', $pecah3[1]);
	$link = $pecah3[0];
	$judul = $judul_kt[0];
	
	$page_abs = bacaHTML($link);
	$pecah_abs1 = explode('<h4>Abstract</h4>', $page_abs);
	$pecah_abs2 = explode('<div id="articleFullText">', $pecah_abs1[1]);
	$abstrak =  strip_tags($pecah_abs2[0]);
	
	
    
    
    $form = $abstrak;
$tokenizing=strip_stopwords(clean($form));                    
$steaming = explode(' ',($tokenizing));
// include composer autoloader

$output   = $stemmer->stem($tokenizing);
$x9= katahubung($output); 
    
$readngram9 =getNgrams("$x9",4);
  
$columns = implode(",",array_keys($readngram9));
$escaped_values = array_map('mysql_real_escape_string', array_values($readngram9));
$values  = implode(",", $escaped_values);
    
//	echo "<tr><td width='20%'>".$judul."</td><td width='80%'>".$abstrak."</td></tr>";
	 $conn->query("insert into abstrak_asli(judul,abstrak) values('$judul','$abstrak')");
	 $conn->query("insert into abstrak_uji(judul,abstrak) values('$judul','$values')");
    
    
    

	
}
echo "</table>";
?>
