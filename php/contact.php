<?php
echo '<center>';
echo '<h1>Contact</h1>';
echo '<HTML>';
echo '<HEAD>';
echo '<TITLE>E-Mail Formulaire</TITLE>';
echo '</HEAD>';
echo '<BODY>';
echo '<FORM method="POST" action="php/envoimail.php">';
echo '<P>Votre nom:<br>';
echo '<INPUT type="text" name="nom" size=30>';
echo '</p>';
echo '<P>Votre adresse E-Mail:<br>';
echo '<INPUT type="text" name="email" size=30>';
echo '</p>';
echo '<P>Message:<br>';
echo '<textarea name="message" cols=30 rows=5></textarea>';
echo "<div class = 'g-recaptcha' data-sitekey = '6Le4ZKwdAAAAAI6HCNmLiPMJ6a9DVO9XdTiRZozQ'></div>";
echo '</p><INPUT type="submit" value="Envoyer">';
echo '</FORM>';
echo '</BODY>';
echo '</HTML>';
echo '</center>';
?>
<?php
    if(isset($_POST['submit']) && $_POST['submit'] == 'SUBMIT'){
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
        {
            $secret = '6Le4ZKwdAAAAAEzVocvaa2SZeQ5N5SIjP8Tklyj5';
            $verifyResponse = fille_get_contents('https://www.google.com/recaptcha/api/sitevereify?secret='.$secret.'$reponse='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if($responseData->success){}
        }
    }
?>