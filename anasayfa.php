<?php 
require 'config.php';

if ( isset($_GET['cikisYap']) ) {
    unset($_SESSION['login']);
    header("Location:index.php");
    die();
}

if ( !isset($_SESSION['login']) ) {
    header("Location:index.php");
    die();
}



$name = $_SESSION['login'];

$name  = DB::getRow("SELECT * FROM users WHERE id=?",array( $name));

?>

<h1>Hoşgeldin, <?php echo $kullanici->uye_adi ?></h1>
<a href="anasayfa.php?cikisYap=1">Çıkış Yap</a>