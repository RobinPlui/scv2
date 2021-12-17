<?php

    require_once 'function.php';

    $content=\file_get_contents('data/experience.yaml');
    $data=yaml_parse($content);

?>
<?php

$data=yaml_parse_file("data/experience.yaml");
    echo '<div style="text-align:center;">';
    echo '<br><h2>' .$data ["stage1"]. '</h2>';

    $data=yaml_parse_file("data/experience.yaml");
    echo '<br><p>' .$data ["stage1contenue"]. '</p>';

    $data=yaml_parse_file("data/experience.yaml");
    echo '<br><h2>' .$data ["stage2"]. '</h2>';

    $data=yaml_parse_file("data/experience.yaml");
    echo '<br><p>' .$data ["stage2contenue"]. '</p>';

    $data=yaml_parse_file("data/experience.yaml");
    echo '<br><h2>' .$data ["stage3"]. '</h2>';

    $data=yaml_parse_file("data/experience.yaml");
    echo '<br><p>' .$data ["stage3contenue"]. '</p>';

    $data=yaml_parse_file("data/experience.yaml");
    echo '<br><h2>' .$data ["stage4"]. '</h2>';

    $data=yaml_parse_file("data/experience.yaml");
    echo '<br><p>' .$data ["stage4contenue"]. '</p>';
    echo '<div>';

?>