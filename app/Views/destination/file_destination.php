<?php $this->layout('layout_destination', ['title' => 'Destination']) ?>

<?php $this->start('css') ?>

<style>
@media (min-width:1850px){
		#mainSection {
	    background: url('<?=$this->assetUrl('img/photos_souvenirsB.png'); ?>');
	    background-position: 3% 55%;
	    background-repeat: no-repeat;
	    background-attachment: fixed;
	}
}
</style>

<?php $this->stop('css') ?>


<?php $this->start('main_content') ?>

<!-- SECTION PRESENTATION CONTINENT -->


	<div class="container">

		<h1 class="text-center"><?php echo $destination['title_destination']; ?></h1>

		<br>



<!-- CAROUSSEL -->
			<div id="my_carousel" class="carousel slide" data-ride="carousel">
		      	<!-- Bulles -->
		    	<ol class="carousel-indicators">
		        	<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
		        	<li data-target="#my_carousel" data-slide-to="1"></li>
		        	<li data-target="#my_carousel" data-slide-to="2"></li>
		      	</ol>
		      <!-- Slides -->
		      	<div class="carousel-inner">
			        <!-- Page 1 -->
			        <div class="item active">  
			        	<div class="carousel-page">
			          	<img src="<?=$this->assetUrl($destination['img_1']); ?>" class="img-responsive" width="560" height="345" style="margin:0px auto;" alt="photo" />
			          	</div> 
			          		<!-- <div class="carousel-caption">Envie d'aller se baigner?</div> -->
			        </div>   
				   	<!-- Page 2 -->
				    <div class="item"> 
				        <div class="carousel-page">
				        <img src="<?=$this->assetUrl($destination['img_2']); ?>" class="img-responsive img-rounded" width="560" height="345" style="margin:0px auto;" alt="photo">  <!-- rajouter les alt -->
				        </div> 
				        	<!-- <div class="carousel-caption">Envie de soleil?</div> -->
				    </div>  
				      <!-- Page 3 -->
				    <div class="item">  
				    	<div class="carousel-page">
				        <img src="<?=$this->assetUrl($destination['img_3']); ?>" class="img-responsive img-rounded" width="560" height="345" style="margin:0px auto;max-height:100%;" alt="photo" />
				        </div>  
				      		<!-- <div class="carousel-caption">Envie de nature</div> -->
				    </div>     
				</div>
			      
			    <!-- Contrôles -->
			    <a class="left carousel-control" href="#my_carousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span></a>
			    <a class="right carousel-control" href="#my_carousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>


			<br><br>
<!-- SECTION PRESENTATION PAYS -->


		<?php foreach ($listePays as $key => $value) {
			
		?>
			<h2 class="text-center"><?= $value['title_nation']?></h2><br>

			<p id="descript"><?= $value['description']?></p><br>

			<div class="text-right">	
				<a href="<?=$this->url('destination_viewPays' , ['pays' => $value['title_nation']]);?>">En savoir plus...</a>
			</div>
			<br>
		<?php
		}
		?>

			<br><br>
			<div id="img_destination" class="col-md-12">
				<img src="<?=$this->assetUrl('img/Around_the_World.png');  ?>">
			</div>
	</div>

<?php $this->stop('main_content') ?>