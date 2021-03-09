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
                <h2>Thank you!</h2>
                <p>A member of our staff will be in contact with you soon:<br>
                Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8'); ?><br>
                Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8'); ?><br>
                Question: <?php echo htmlspecialchars($myQuestion, ENT_QUOTES, 'UTF-8'); ?>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
    </div>
</body>
</html>