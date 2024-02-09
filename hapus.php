<?php
require 'functions.php';
$id = $_GET['id'];
hapus("delete from event where id=$id");
header("Location:index.php#jadwal");
