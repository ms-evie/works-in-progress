<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration

require '../includes/db.inc.html.php';

try
{
  $sql = 'SELECT * FROM far';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching page: ' . $e->getMessage();
  include '../includes/error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $contents[] = array(
      'title' => $row['title'],
      'description' => $row['description'],
      );
}

include 'faq.html.php';
?>