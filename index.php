<!DOCTYPE html>

<html lang="fr">
	
    <head>
    	<title>Curriculum Vitae</title>
	    <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');
		</style>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>
	
	<body>
		<?php 
		include('php/menutop.php');
		

		$content=\file_get_contents('data/menutop.yaml');
		$data=yaml_parse($content);

		foreach($data as $cle=>$val){
			echo '<section id="'.$val.'">';
			include('php/'.$val.'.php');
			echo '</section>';
		}	


		
		?>
		<section id="competence">
			<?php 
			include("competence.php"); 
			$content=\file_get_contents('data/competence.yaml');
		$data=yaml_parse($content);?>
		</section>
		
		

	</body>

</html>