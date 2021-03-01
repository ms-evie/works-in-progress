<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ace in the Hole Multisport Events</title>
  <meta name="description" content="Ace in the Hole Multisport Events is an event company that hosts multisport athletic events.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/navigation.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
            <?php include '../includes/nav.inc.html.php'; ?>
    <main>    
       <h1>Registration</h1>
        <h2>Register Here!</h2>
      <div id="source">Required fields are marked with an asterisk (*).</div>
      <div id="registration">
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="role">*Role:</label>
        <select size="1" name="role" id="role">
          <option>Choose Your Role</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>    
        </select>
        <label for="myfname">*Full Name:</label>
          <input type="text" name="myfname" id="myfname" required>
        <label for="myemail">*Email:</label>
          <input type="email" name="myemail" id="myemail" required>
        <label for="myphone">Phone Number:</label>
          <input type="tel" name="myphone" id="myphone">
        <label for="mycontact">Emergency Contact Name:</label>
          <input type="text" name="mycontact" id="mycontact">  
        <label for="myemergency">Emergency Contact Phone Number:</label>
          <input type="tel" name="myemergency" id="myemergency">
        <label for="gender">Gender:</label>
        <select size="1" name="gender" id="gender">
          <option>Choose Your Gender</option>
          <option value="female">Female</option>
          <option value="Male">Male</option>
          <option value="other">Non-Binary/Other</option>    
        </select>
        <label for="size">T-Shirt Size:</label>  
        <select size="1" name="size" id="size">
          <option>Choose Your T-shirt Size</option>
          <option value="xs">XS</option>
          <option value="s">Small</option>
          <option value="m">Medium</option>
          <option value="l">Large</option> 
          <option value="xl">X-Large</option>     
        </select>  
        <label for="saturday">Saturday Events Registering For:</label>
          <textarea name="saturday" id="saturday" rows="2" cols="20" required></textarea>
        <label for="sunday">Sunday Events Registering For:</label>
          <textarea name="sunday" id="sunday" rows="2" cols="20" required></textarea>  
        <label for="mycomments">Any Special Accommodations:</label>
          <textarea name="mycomments" id="mycomments" rows="2" cols="20" required></textarea>
          <input id="mysubmit" type="submit" value="Submit">
      </form>
      </div>
    </main>
        <?php include '../includes/footer.inc.html.php'; ?>
  </div>
    
    
</body>
</html>