 <!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- 	On inclut les librairies MDB Bootstrap -->
 	<?php include_once ("inc/lib.php"); ?>
	<title>Guitares BDD</title>
	<style type="text/css">
		body {
			background-color: rgba(0, 0, 0, 0.1);
		}
		/* active */
		.nav-pills .nav-link.active {
		    background-color: rgba(255, 0, 0, 0.3);
		}

		/* active en hover */
		.nav-pills .nav-link:hover {
		    background-color: rgba(255, 0, 0, 0.6);
		}



		/* active (faded) */
		.nav-pills .nav-link {
		    background-color: rgba(255, 0, 0, 0.1);
		    color: white;
		}		
	</style>
</head>

<body>
	
<header>

	<nav class="navbar navbar-expand-lg navbar-dark pink darken-4 z-depth-2 mb-5">
	    <a class="navbar-brand" href="index.php">REAL ESTATE</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="nav nav-pills ml-auto">
<!-- 	            <li class="nav-item mx-2">
	                <a class="nav-link" href="index.php">Accueil</a>
	            </li> -->
	            <li class="nav-item mx-2">
	                <a class="nav-link active" href="ajout_annonce.php">Ajout d'une Annonce</a>
	            </li>
	        </ul>
	    </div>
	</nav>

</header>