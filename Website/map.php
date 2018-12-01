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
	
<ul>
	<h3><a href="erova.php">Erova</a></h3>
<p><a href="capitol_erova.php">Capitol</a></p>
<p><a href="uvera_mtn_military_base">Uvera Moutain Military Base</a></p>
	<h3><a href="erova.php">Fortera</a></h3>
<p><a href="capitol_fortera.php">Capitol</a></p>
	<h3><a href="erova.php">Norum</a></h3>
<p><a href="capitol_norum.php">Capitol</a></p>
<?php InsertBreakingSpaceBlock(); ?>
	
	
</ul>
<script>
imageZoom("myimage", "myresult");
</script>
<?php include 'includes/footer.php' ?>																					