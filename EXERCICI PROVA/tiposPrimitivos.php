<?php

$i = 12;
$tipus_de_i = gettype( $i );
echo "<p>La variable \$i conté el valor $i i és del tipus $tipus_de_i</p>";

$i = "Hola"; $tipus_de_i = gettype( $i ); echo "<p>La variable \$i conté el valor $i i és del tipus $tipus_de_i</p>";
// Explica perquè hem posat la barra invertida davant del símbol $.
// Es un símbolo de escape, por lo que se utiliza para que en pantalla aparezca tal y como está escrito.

$i = 7.2;
$tipus_de_i = gettype( $i );
echo "<p>La variable \$i conté el valor $i i és del tipus $tipus_de_i</p>";
// Digues per a que serveix la funció gettype.
// Para obtener el tipo de la variable que pasamos como parámetro.

$i = true;
$tipus_de_i = gettype( $i );
$tipus_de_tipus_de_i = $tipus_de_i;
echo "<p>La variable \$i conté el valor $i i és del tipus $tipus_de_i</p>";
// De esta manera obtenemos el tipo de variable del return de la función gettype.
echo "<p>La variable \$tipus_de_i conté el valor $tipus_de_i i és del tipus $tipus_de_tipus_de_i</p>";

?>