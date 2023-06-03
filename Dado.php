<?php

class Dado{
    public int $puntos;

    public function lanzar(): void{
        //Simular el lanzamiento
        $this->puntos = rand(1, 6);
    }

    public function __construct()
    {
        $this->puntos = 0;
    }
}

//Ciclo de vida de objetos

//crear
$miDado = new Dado();

//Usarlo
$miDado->lanzar();
echo 'Puntos obtenidos : ' . $miDado->puntos;

//Destruir o finalizar
$miDado = null;


















