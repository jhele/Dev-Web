<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
<html>
        <head>

        	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        	<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="description" content="recette,poisson,repas,plat">
			<link rel="stylesheet" href="css/bulma.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <title>Les recettes de Julien</title>
        </head>
        <body>
       		<div class="container">
       			<div style="background-image: url('http://www.wallpaperking.co.uk/7348-large_default/collage-multi-colour-grey-wallpaper-2036-1.jpg');">
       			<div class="row">
       				<div class="col">
               			<h1><?php echo $title; ?></h1>
               	</div>
    			<div class="col-md-3">
    				<button type="button" class="btn btn-dark">Admin</button>
    			</div>
          </div>
    			</div>	
          <div class="p-3 mb-2 bg-light text-dark">
                <nav class="navbar navbar-light bg-light">
				  <form class="form-inline" method="get" action="<?=site_url('recette') ?>">
				    <input class="form-control mr-sm-2" type="search" placeholder="Recherche par Ingredients" aria-label="Search">
				    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
				  </form>
				</nav>
        





