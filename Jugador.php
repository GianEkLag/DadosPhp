<?php

class Jugador{
    public $nombre;
    public $puntoGanado;

     // @param dado1 Primer dado a lanzar
     // @param dado2 Segundo dado a lanzar
     //@return Devuelve la suma de los puntos obtenidos en ambos dados
     
     public function lanzaDados($dado1, $dado2){
        $dado1->lanzar();
        $dado2->lanzar();

     //retornar los puntos que cayeron en los dados
     return (int) ($dado1->puntos + $dado2->puntos);
     }
}
?>