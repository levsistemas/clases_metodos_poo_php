<?php
    class aldeano {
        public $construir;
        public $reparar;
        public $recolectar;
        public $combatir;
        public $cazar;
    }

    function modoConstruir(){
        echo '<h2>Modo construccion...</h2>';
    }

    function modoReparar(){
        echo '<h2>Modo reparar...</h2>';
    }

    function modoRecolectar(){
        echo '<h2>Modo juntando recursos...</h2>';
    }

    function modoCombatir(){
        echo '<h2>Modo combate, bajando una torre con la mejora de la Universidad...</h2>';
    }

    function modoCazar(){
        echo '<h2>Modo cazando animales...</h2>';
    }

    $aldeano= new aldeano();
    $aldeano->construir='Casa';
    $aldeano->reparar='Centro Urbano';
    $aldeano->recolectar='Madera';
    $aldeano->combatir='Peleando';
    $aldeano->cazar='Jabalí';

    $aldeana= new aldeano();
    $aldeana->construir='granero';
    $aldeana->reparar='muelle';
    $aldeana->recolectar='frutos';
    $aldeana->combatir='Peleando';
    $aldeana->cazar='oveja';

    echo '<h1>Clase "Aldeano"</h1>';
    echo '<h1>Construir: '.$aldeano->construir.'</h1>';
    echo '<h1>Reparar: '.$aldeano->reparar.'</h1>';
    echo '<h1>Recolectar: '.$aldeano->recolectar.'</h1>';
    echo '<h1>Combatir: '.$aldeano->combatir.'</h1>';
    echo '<h1>Cazar: '.$aldeano->cazar.'</h1>';
    
    echo '<h1>Clase "Aldeana"</h1>';
    echo '<h1>Construir: '.$aldeana->construir.'</h1>';
    echo '<h1>Reparar: '.$aldeana->reparar.'</h1>';
    echo '<h1>Recolectar: '.$aldeana->recolectar.'</h1>';
    echo '<h1>Combatir: '.$aldeana->combatir.'</h1>';
    echo '<h1>Cazar: '.$aldeana->cazar.'</h1>';

    modoConstruir();
    modoReparar();
    modoRecolectar();
    modoCombatir();
    modoCazar();
?>