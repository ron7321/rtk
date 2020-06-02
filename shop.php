<?php
include_once "connect.php";
include_once "header.php";
?>
<main>
	<h1 class="mb-5">Наш магазин</h1>
	<hr class="liner">
	<!--Google map-->
<div id="map-container-google-3" class="z-depth-1-half map-container-3">
 <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d1953.7959506664824!2d30.47176081315637!3d59.90414419999998!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x46962e4483f1c1d9%3A0x964c6d03c9df0ad2!2z0YPQu9C40YbQsCDQlNGL0LHQtdC90LrQviwgMjEsINCh0LDQvdC60YIt0J_QtdGC0LXRgNCx0YPRgNCzLCDQoNC-0YHRgdC40Y8!3m2!1d59.9041443!2d30.4738637!5e1!3m2!1sru!2sru!4v1591085704541!5m2!1sru!2sru"frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>
<style>
	.map-container-3{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-3 iframe{

top:0;
height:100%;
width:100%;
position:absolute;
}
</style>
</main>
<?php
include_once "footer.php";
?>