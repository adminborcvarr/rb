<?php 
require 'config.php';

if ( isset($_GET['cikisYap']) ) {
    unset($_SESSION['login']);
    header("Location:üyegiris.php");
    die();
}

if ( !isset($_SESSION['login']) ) {
    header("Location:üyegiris.php");
    die();
}



$kullanici_ıd = $_SESSION['login'];

$kullanici = DB::getRow("SELECT * FROM users WHERE ıd=?",array( $kullanici_ıd ));

?>

<h1>Hoşgeldin, <?php echo $kullanici-> name ?></h1>
<a href="anasayfa.php?cikisYap=1">Çıkış Yap</a>