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
    <main>
        <?php include '../includes/nav.inc.html.php'; ?>
        
         <h2>Thank you!</h2>
            <p>Our records show you submitted the following:<br>
               Role: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8');?> <!-- print role from form submission here --><br>
               Full Name: <?php echo htmlspecialchars($myfname, ENT_QUOTES, 'UTF-8');?><!-- print full name from form submission here --><br>
               Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8');?><!-- print email address from form submission here --><br>
               Phone: <?php echo htmlspecialchars($myphone, ENT_QUOTES, 'UTF-8');?><!-- print phone number from form submission here --><br>
               T-shirt Size: <?php echo htmlspecialchars($size, ENT_QUOTES, 'UTF-8');?> <!-- print t-shirt size from form submission here --><br>    
               Accommodations: <?php echo htmlspecialchars($mycomments, ENT_QUOTES, 'UTF-8');?><!-- print accommodations from form submission here --><br>
             </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>