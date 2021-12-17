<?php

    require_once 'function.php';

    $content=\file_get_contents('data/accueil.yaml');
    $data=yaml_parse($content);

?>
<?php

$data=yaml_parse_file("data/accueil.yaml");
    echo '<div style="text-align:center;">';

    echo '<br><h2>' .$data ["titre1"]. '</h2>';

    echo "<br><img src='img/Robin.jpg' width='150' >";

    $data=yaml_parse_file("data/accueil.yaml");
    
    echo '<br><h3><p>' .$data ["ac1"]. '</p></h3>';

    $data=yaml_parse_file("data/accueil.yaml");
    echo '<br><h3><p>' .$data ["ac2"]. '</p></h3>';

    $data=yaml_parse_file("data/accueil.yaml");
    echo '<br><h3><p>' .$data ["ac3"]. '</p></h3>';

    $data=yaml_parse_file("data/accueil.yaml");
    echo '<br><h3><p>' .$data ["ac4"]. '</p></h3>';

    $data=yaml_parse_file("data/accueil.yaml");
    echo '<br><h3><p>' .$data ["ac5"]. '</p></h3>';
    
    echo '<div>';

    
?>
