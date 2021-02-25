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
  include 'includes/error.html.php';
  exit();
}

try
{
  $sql = 'SELECT * FROM content';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching page: ' . $e->getMessage();
  include 'includes/error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $contents[] = array(
      'title' => $row['title'],
      'description' => $row['description'],
      'image' => $row['image'],
      );
}

include 'home/home.html.php';