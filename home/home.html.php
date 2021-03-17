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
        <?php include 'includes/nav.inc.html.php'; ?>
    <main>
        <h1> About Ace in the Hole </h1><br>
        
            <?php foreach ($contents as $content): ?>
            <?php echo "<img src=".$content['image'].">" ; ?>
        
        <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, nationalorigins, gender identifications and cultural backgrounds. We offer Events for Every Body.</p>
           
        <h2><?php echo htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                <?php echo $content['description']; ?>
            <?php endforeach; ?>
        
        <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-basecolor="#FF0000" data-accent="#f59696" data-textcolor="#FFFFFF" >PORTLAND WEATHER</a> <br>
        
      <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
      </script>
     
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCas222Aceinthehole-110661963841617%2F&tabs=timeline%2C%20events%2C%20messages&width=400px&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400px" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        
        <blockquote class="twitter-tweet" tw-align-center><p lang="en" dir="ltr">Let&#39;s meet awesome people through our activities! 🥳🤗</p>&mdash; cas222 (@Cas222Pcc) <a href="https://twitter.com/Cas222Pcc/status/1236843409253355523?ref_src=twsrc%5Etfw">March 9, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        
     
        
    </main>
        <?php include 'includes/footer.inc.html.php'; ?>
  </div>
    
</body>
</html>