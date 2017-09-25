<?php

$i = 12;
$tipus_de_i = gettype( $i );
echo "<p>La variable \$i conté el valor $i i és del tipus $tipus_de_i</p>";

$i = "Hola"; $tipus_de_i = gettype( $i ); echo "<p>La variable \$i conté el
valor $i i és del tipus $tipus_de_i</p>";

$i = 7.2;
$tipus_de_i = gettype( $i );
echo "<p>La variable \$i conté el valor $i i és del tipus $tipus_de_i</p>";

$i = true;
$tipus_de_i = gettype( $i );
$tipus_de_tipus_de_i = $tipus_de_i;
echo "<p>La variable \$i conté el valor $i i és del tipus $tipus_de_i</p>";

echo "<p>La variable \$tipus_de_i conté el valor $tipus_de_i i és del tipus $tipus_de_tipus_de_i</p>";

?>