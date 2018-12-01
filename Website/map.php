<?php include 'includes/header.php';
include 'includes/zoom.php' 
?>
<h1><span>World Map</span></h1>
<div class="map">

<div class="img-zoom-container divleft">
  <img id="myimage" src="images/map.png" width="1024" height="600">
  </div>
  <div class="img-zoom-container divright" >
  	<h2>Zoom</h2>
  <div id="myresult" class="img-zoom-result"></div>
</div>

</div>
<div>	
<ul>
	<h3><a href="undercon.php">Erova</a></h3>
<p><a href="places/erova.php">Capitol</a></p>
<p><a href="undercon.php">Uvera Military Base</a></p>
	<h3><a href="undercon.php">Fortera</a></h3>
<p><a href="undercon.php">Capitol</a></p>
	<h3><a href="undercon.php">Norum</a></h3>
<p><a href="undercon.php">Capitol</a></p>
<?php InsertBreakingSpaceBlock(); ?>
	
</ul>
</div>
<script>
imageZoom("myimage", "myresult");
</script>
<?php include 'includes/footer.php' ?>																					