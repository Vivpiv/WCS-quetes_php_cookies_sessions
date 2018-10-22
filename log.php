<?php
session_start();

$_SESSION['prenom']=$_POST['loginname'];

setcookie("user",$_POST['loginname'], time() + 365*24*3600, null, null, false, true);

header("location:index.php");

if ($_GET["connect"]=="false") {
    session_destroy();
}