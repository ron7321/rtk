<?php
include_once "connect.php";
include_once "header.php";
?>
<main>
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="/images/1слайд.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>First slide label</h5>
	        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="/images/2слайд.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Second slide label</h5>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="/images/3слайд.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Third slide label</h5>
	        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
	      </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<hr class="liner">
	<h1 class="mb-5">КАТЕГОРИИ</h1>
	<div class="container">
		<div class="row">
			<?php
			$result = $link->query("SELECT * FROM `category`");
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<div class="col-md-4 mb-5">
					<div class="card border-0">
					  <div class="card-body" style="background-color: #fae2e9;">
					    <a href="tovars.php?id=<?= $row['id_category']; ?>" class="text-center d-block stas"><?= $row['name_category']; ?></a>
					  </div>
					  <div class="card-img-top card-custom" 
					  style="background-image: url('/images/<?= $row['photo_category']; ?>');"></div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</main>
<?php
include_once "footer.php";
?>