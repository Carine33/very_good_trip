<?php $this->layout('layout_login', ['title' => 'Première page']) ?>

<?php $this->start('main_content') ?>

	<h2>Vous voulez vous déconnecter ?</h2>
	<form method="get">
		<a href="<?=$this->url('default_home');?>" class="btn btn-primary btn-lg">Non</a>


		<input type="submit" name="logout" value="Oui" class="btn btn-danger btn-lg">

	</form>


<?php $this->stop('main_content') ?>