
<?php
$data=yaml_parse_file("data/formation.yaml");
echo '<div style="text-align:center;">';
echo '<h1>' .$data ["titre1"]. '</h1>';

echo '<p>' .$data ['form1']. '</p>';
echo "<img src='img/Ursule.png' width='250' >";

echo '<p>' .$data ["form2"]. '</p>';
echo '<p>' .$data ["form3"]. '</p>';
echo '<p>' .$data ["form4"]. '</p>';
echo "<img src='img/Lycee.png' width='250' >";

echo '<p>' .$data ["form3"]. '</p>';
echo "<img src='img/vim.png' width='250' >";
echo '<div>';

?>
