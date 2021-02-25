<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration

include '../includes/db.inc.html.php';

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['myfname']) && empty($honeypot) )

  {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $honeypot = $_POST['honeypot'];
    $role = $_POST['role'];
    $myfname = $_POST['myfname'];
    $myemail = $_POST['myemail'];
    $myphone = $_POST['myphone'];
    $mycontact = $_POST['mycontact'];
    $myemergency = $_POST['myemergency'];
    $gender = $_POST['gender'];
    $size = $_POST['size'];
    $saturday = $_POST['saturday'];
    $sunday = $_POST['sunday'];
    $mycomments = $_POST['mycomments'];
    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO registration SET
          role = :role,
          fname = :fname,
          email = :email,
          phone = :phone,
          contact = :contact,
          emergency = :emergency,
          gender = :gender,
          size = :size,
          saturday = :saturday,
          sunday = :sunday,
          accommodations = :accommodations';
      $s = $pdo->prepare($sql);
      $s->bindValue(':role', $role);
      $s->bindValue(':fname', $myfname);   
      $s->bindValue(':email', $myemail);
      $s->bindValue(':phone', $myphone);
      $s->bindvalue(':contact', $mycontact);
      $s->bindvalue(':emergency', $myemergency);
      $s->bindvalue(':gender', $gender); 
      $s->bindvalue(':size', $size); 
      $s->bindvalue(':saturday', $saturday);
      $s->bindvalue(':sunday', $sunday);    
      $s->bindValue(':accommodations', $mycomments);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error submitting form: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    include 'success.html.php';
    
  } else {
      include 'registration.html.php'; 
 }

?>