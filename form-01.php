<?php

var_dump($_POST);

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>titre</title>
  </head>
  <body>

    <form action="<?php echo basename(__FILE__); ?>" method="post" enctype="multipart/form-data">
    	<div>
    		<input type="text" id="titre" name="titre" value="" placeholder="titre" />
    	</div>
    	<div>
    		<textarea id="texte" name="texte" placeholder="texte"></textarea>
    	</div>
    	<div>
    		<input type="submit" value="valider" />
    	</div>
    </form>

  </body>
</html>