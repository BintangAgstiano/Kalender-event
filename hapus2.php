
<?php
require 'functions.php';
$id = $_GET['id'];
hapus2("delete from event2 where id=$id");
header("Location:index.php");
?>