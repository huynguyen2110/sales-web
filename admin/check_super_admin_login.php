<?php  

session_start();
if(empty($_SESSION['level']) ){ //kiem tra trong hoac kiem tra bang 0
	header('location:../index.php');
}