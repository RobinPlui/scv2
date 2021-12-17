<?php

    require_once 'function.php';

    $content=\file_get_contents('data/menutop.yaml');
    $data=yaml_parse($content);

?>
    <header>
        <nav id="menutop">
            <?php
            foreach($data as $cle=>$val){
                echo("<a href='#".$val."'>".$cle."</a>");
            }
            ?>
        </nav>
    </header>
<?php


?>
