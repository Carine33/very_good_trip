<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $this->e($title) ?>  Very Good Trip </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- // Le CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
    <link href="<?=$this->assetUrl('css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=$this->assetUrl('css/agency.css');?>" rel="stylesheet">
    <!-- // CSS Perso -->
    <link rel="stylesheet" type="text/css" href="<?=$this->assetUrl('css/style_registration.css');?>">
    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="<?=$this->assetUrl('font-awesome/css/font-awesome.min.css');?>">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body  id="page-top" class="index">

<nav class="navbar navbar-default navbar-fixed-top">
	<?=$this->insert('_partials/navbarBis');?>
</nav>

<header>

</header>

<section>
	<?= $this->section('main_content'); ?>
</section>

<footer>
	<?=$this->insert('_partials/footerBis');?>
</footer>

    <!-- jQuery -->
    <script src="<?=$this->assetUrl('js/jquery.js');?>"></script>
    <!-- javaScript -->
    <!-- <script src="<?=$this->assetUrl('js/contact.js');?>" type="text/javascript"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=$this->assetUrl('js/bootstrap.min.js');?>"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?=$this->assetUrl('js/classie.js');?>"></script>
    <script src="<?=$this->assetUrl('js/cbpAnimatedHeader.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=$this->assetUrl('js/agency.js');?>"></script>

    <script>
   



    var fileInput1 = document.getElementById("img_1avatar");
    var textInput1 = document.getElementById("nomFichier1");
    var fauxBouton1 =  document.getElementById("fakeBrowser1");
   
    
    fauxBouton1.addEventListener("click", clicBrowser1);
    fileInput1.addEventListener("change", modifNomFichier1);
  

    function clicBrowser1(){

        fileInput1.click();
    }

    function modifNomFichier1(){

     
        textInput1.value = fileInput1.value;
    }

  

     

    var fileInput2 = document.getElementById("img_2avatar");
    var textInput2 = document.getElementById("nomFichier2");
    var fauxBouton2 =  document.getElementById("fakeBrowser2");
  
    
    fauxBouton2.addEventListener("click", clicBrowser2);
    fileInput2.addEventListener("change", modifNomFichier2);
  


    function clicBrowser2(){

        fileInput2.click();
    }

    function modifNomFichier2(){

        textInput2.value = fileInput2.value;
    }

   
     
    var fileInput3 = document.getElementById("img_3avatar");
    var textInput3 = document.getElementById("nomFichier3");
    var fauxBouton3 =  document.getElementById("fakeBrowser3");
    
    
    fauxBouton3.addEventListener("click", clicBrowser3);
    fileInput3.addEventListener("change", modifNomFichier3);
 


    function clicBrowser3(){

        fileInput3.click();
    }

    function modifNomFichier3(){

      
        textInput3.value = fileInput3.value;
    }

    

     



</script>
</body>
</html>