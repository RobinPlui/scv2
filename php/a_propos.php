<?php
$data=yaml_parse_file("data/a_propos.yaml");
echo '<div style="text-align:center;">';

echo "<br><img src='img/Robin.jpg' width='150' >";
echo '<h1>' .$data ["titre1"]. '</h1>';

echo '<h3>' .$data ['propo1']. '</h3>';

echo '<h3>' .$data ["propo2"]. '</h3>';

echo '<h3>' .$data ["propo3"]. '</h3>';

echo '<h3>' .$data ["propo4"]. '</h3>';

echo '<h3>' .$data ["propo5"]. '</h3>';

echo "<a href='https://www.instagram.com/robin_plu/' '><IMG src='img/instagramlogo.png' width='50'>   </a>";


echo '<div>';
