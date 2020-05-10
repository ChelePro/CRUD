<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'crudphp'
) or die(mysqli_erro($mysqli));

?>
