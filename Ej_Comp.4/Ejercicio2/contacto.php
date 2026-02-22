<?php
spl_autoload_register(function($class_name){
    require("class/" . $class_name . ".class.php");
});

$contactpage = new page();
$contactpage->title = "Contacto - Postgrados UDB";

$contactpage->content = <<<PAGE
<div id="topcontent">
    <div id="textbox">
        <h2>CONTACTO</h2>
        <h4>Números de atención:</h4>
        <p><strong>Universidad Don Bosco.</strong><br />Tel. (503)2251-8200.</p>
        <p><strong>Administración Académica.</strong><br />Tel. (503)2251-8200 ext. 1710.</p>
        <p><strong>Administración Financiera.</strong><br />Tel. (503)2251-8200 ext. 1700.</p>
        <p><strong>Nuevo Ingreso.</strong><br />Tel. (503)2527-2314.</p>
    </div>
    <div id="picture">
        <img src="img/entradapostgrados.jpg" alt="Imagen de contacto" width="800" height="370" />
    </div>
</div>
PAGE;

$contactpage->display();
?>