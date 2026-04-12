<?php
spl_autoload_register(function($class_name){
    require("class/" . $class_name . ".class.php");
});

$homepage = new page();
$homepage->content = <<<PAGE
<div id="topcontent">
    <div id="textbox">
        <h2>BIENVENIDOS</h2>
        <p>
            La Universidad Don Bosco en sus 27 años de experiencia educativa,
            ha mantenido una expansión constante en su oferta académica,
            lo cual puede comprobarse en su trayectoria desde su creación en 1984.
        </p>
        <p>
            Con la apertura del Centro de Estudios de Postgrados (CEP), promovemos un nuevo 
            horizonte de posibilidades educativas para el país.
        </p>
    </div>
    <div id="picture">
        <img src="img/plaza-de-las-banderas.jpg" alt="Imagen de portada" width="800" height="370" />
    </div>
</div>
PAGE;

$homepage->display();
?>