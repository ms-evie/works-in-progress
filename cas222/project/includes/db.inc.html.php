<?php

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=evelynwe_project', 'evelynwe_project_user', 'myP4ssw0rd5');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}

?>