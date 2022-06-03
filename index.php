<?php
	require_once("Numero.php");
	$num = new Numero(3);
	echo $num->n."<hr />";
    echo $num->va();
    if ($num->par()==true) echo "<hr /> Es par";
    else echo "<hr /> Es impar";
    if ($num->primo()==true) echo "<hr /> Es par";
    else echo "<hr /> No es primo";
    echo $num->numeroenletra();
?>