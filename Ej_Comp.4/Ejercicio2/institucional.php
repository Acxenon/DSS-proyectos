<?php
spl_autoload_register(function($class_name){
    require("class/" . $class_name . ".class.php");
});

$instPage = new page();
$instPage->title = "Institucional - Universidad Don Bosco";

$instPage->content = <<<PAGE
<div id="topcontent">
    <div id="title" style="text-align: center;">
        <h2>IDENTIDAD INSTITUCIONAL</h2>
    </div>

    <div style="display: flex; justify-content: space-around; margin-top: 30px;">
        <div style="width: 45%; background-color: #f9f9f9; padding: 20px; border-left: 5px solid #004a99;">
            <h3>Nuestra Misión</h3>
            <p>
                Formar integralmente a la persona humana por medio de una educación superior 
                que integre ciencia y espiritualidad, inspirada en el carisma de Don Bosco.
            </p>
        </div>

        <div style="width: 45%; background-color: #f9f9f9; padding: 20px; border-left: 5px solid #004a99;">
            <h3>Nuestra Visión</h3>
            <p>
                Ser la universidad referente en la formación profesional y tecnológica a 
                nivel regional, por su excelencia académica y estilo educativo.
            </p>
        </div>
    </div>

    <div id="paragraph" style="margin-top: 30px;">
        <h3>Valores Salesianos</h3>
        <ul>
            <li>Razón, Religión y Amabilidad.</li>
            <li>Excelencia académica.</li>
            <li>Compromiso social y ético.</li>
        </ul>
    </div>
</div>
PAGE;

echo $instPage->display();
?>