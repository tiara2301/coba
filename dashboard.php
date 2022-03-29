<?php
session_start();
if(isset($_SESSION['username']) and $_SESSION['grup']!=1){
    header('location: loginform.php'); 
}

echo "Selamat Datang Seller " .$_SESSION ['nama']. "<a href='logout.php'> Logout </a> ";

?>