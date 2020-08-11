<?php
 session_start();
 if(empty($_SESSION["name"])){
  header("location:index.php");
  exit;
}
  else{
  	include "connect.php";
    $id=$_SESSION["id"];

    $sql=$conn->prepare("DELETE FROM user WHERE uid='$id';");
    $sql->execute();
    header("location:signout.php");
  }

?>