<?php
spl_autoload_register(function($class_name){
    require("class/" . $class_name . ".class.php");
});

$carrerasPage = new page();
$carrerasPage->title = "Oferta Académica - Postgrados UDB";

$carrerasPage->content = <<<PAGE
<div id="topcontent">
    <div id="title">
        <h2>NUESTRAS MAESTRÍAS Y DOCTORADOS</h2>
    </div>
    
    <div id="paragraph">
        <p>Contamos con una oferta académica diseñada para profesionales que buscan especialización de alto nivel:</p>
        
        <table border="1" style="width:100%; border-collapse: collapse; margin-top: 20px; text-align: left;">
            <tr bgcolor="#f2f2f2">
                <th style="padding: 10px;">Facultad</th>
                <th style="padding: 10px;">Programa de Postgrado</th>
                <th style="padding: 10px;">Duración</th>
            </tr>
            <tr>
                <td style="padding: 10px;">Ingeniería</td>
                <td style="padding: 10px;">Maestría en Gestión de la Energía Renovables</td>
                <td style="padding: 10px;">2 Años</td>
            </tr>
            <tr>
                <td style="padding: 10px;">Ciencias y Humanidades</td>
                <td style="padding: 10px;">Maestría en Políticas para la Prevención de la Violencia</td>
                <td style="padding: 10px;">2 Años</td>
            </tr>
            <tr>
                <td style="padding: 10px;">Economía</td>
                <td style="padding: 10px;">Doctorado en Ciencias Sociales</td>
                <td style="padding: 10px;">3 Años</td>
            </tr>
        </table>
    </div>

    <div id="picture" style="margin-top: 20px; text-align: center;">
        <img src="img/carreras_banner.jpg" alt="Estudiantes de Postgrado" width="800" height="300" />
    </div>
</div>
PAGE;

echo $carrerasPage->display();
?>