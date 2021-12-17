<?php
$content=file_get_contents("data/competence.yaml");
$data=yaml_parse($content);

echo '<div class="container">';
foreach($data[0] as $elt):
        echo '<div class="bar">';
        echo '<div class="bar-stat" style="width:'.$elt["niveau"].';">';
        echo '<span class="bar-text">'.$elt['competence'].' - '.$elt["niveau"].'</span>';
        echo '</div>';
        echo '</div>';
endforeach;
echo '</div>';

    

//Langue//

    echo "<br><div class='separator' style='clear: both; text-align: center;'>";
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/3/3a/Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931958%29.svg' width='82' >";
    echo "<div class='separator' style='clear: both; text-align: center'>";
    echo "<progress id='avancement' value='100' max='100'></progress></p>100%";



    echo "<br><div class='separator' style='clear: both; text-align: center;'>";
    echo "<img src='https://media.lesechos.com/api/v1/images/view/5c372cfd8fe56f634f7f883b/1280x720/ech21162044-1.jpg' width='82' >";
    echo "<div class='separator' style='clear: both; text-align: center'>";
    echo "<progress id='avancement' value='40' max='100'></progress></p>40%";



    echo "<br><div class='separator' style='clear: both; text-align: center;'>";
    echo "<img src='https://lesplusbeauxdrapeauxdumonde.files.wordpress.com/2017/03/netherlands-26885_1280.png' width='82' >";
    echo "<div class='separator' style='clear: both; text-align: center'>";
    echo "<progress id='avancement' value='25' max='100'></progress></p>25%";



    echo "<br><div class='separator' style='clear: both; text-align: center;'>";
    echo "<img src='https://www.mjcescalquens.fr/wp-content/uploads/2018/07/espagnol-pixabay.comfrespagne-drapeau-h%C3%A9raldique-red-2906824.png' width='82' >";
    echo "<div class='separator' style='clear: both; text-align: center'>";
    echo "<progress id='avancement' value='15' max='100'></progress></p>15%";


?>