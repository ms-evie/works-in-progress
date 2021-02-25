<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ace in the Hole Multisport Events</title>
  <meta name="description" content="Ace in the Hole Multisport Events is an event company that hosts multisport athletic events.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
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
         <h1 id="logo">Ace in the Hole Multisport Events</h1>
            <?php include 'includes/header.inc.html.php'; ?>
            <?php include 'includes/nav.inc.html.php'; ?>
        </header>
        <main>
            <?php foreach ($contents as $content): ?>
            <?php echo "<img src=".$content['image'].">" ; ?>
            <h1><?php echo htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
                <?php echo $content['description']; ?>
            <?php endforeach; ?>
    
        
    </main>
        <?php include 'includes/footer.inc.html.php'; ?>
  </div>
    
</body>
</html>