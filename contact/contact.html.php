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
        <header class="header">
         <input class="menu-btn" type="checkbox" id="menu-btn" />
         <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
         <h1 id="logo">Contact Us</h1>
            <?php include '../includes/nav.inc.html.php'; ?>
        </header>
        <main>
        <h2>Do you have questions? We'd love to hear from you!</h2>
      <form method="post" action=" " id="inquiryForm">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="myName">Name:</label>
          <input type="text" name="myName" id="myName">
        <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail">
        <label for="myQuestion">Question or Comment:</label>
          <textarea form="inquiryForm" rows="15" cols="30" name="myQuestion" id="myQuestion"></textarea>
        <label for="role">Role:</label>
        <select size="1" name="role" id="role">
          <option>Choose Your Role</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
          <option value="interested">Interested Party</option>    
        </select>
        <input id="mySubmit" type="submit" value="Submit">
      </form>
        
    </main>
        <?php include '../includes/footer.inc.html.php'; ?>
  </div>
    
</body>
</html>