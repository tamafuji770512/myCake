<html>
  <head>
    <title>Index Page</title>
  </head>
  <body>
    <h1>Index Page</h1>
    <p>this is test View.</p>
    <ul>
    <?php foreach($arr as $key => $value){ ?>
	<li><?php echo $value; ?></li>
    <?php } ?>
    </ul>
  </body>
</html>
