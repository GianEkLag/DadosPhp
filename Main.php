<?php
//leer nombres de jugadores desde el teclado
$juego = new JuegoDados("Pedro", "Juan");

$juego->iniciarJuego();

/*
while ($juego->vencedor != null){

    $juego->iniciarJuego();
}
*/

if ($juego->vencedor == null)
    echo "Empate. NO HAY VENCEDORES GGGG";
else
    echo "El vencedor es: " . $juego->vencedor->nombre;
?>