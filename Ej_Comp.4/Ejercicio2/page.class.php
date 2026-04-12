<?php
class page {
    // Atributos de la clase
    public $content;
    public $title = "Centro de Estudios de Postgrados - Universidad Don Bosco &copy;";
    public $keywords = "Universidad Don Bosco, UDB, Educación con estilo salesiano";
    public $buttons = array(
        "Inicio" => "home.php",
        "Carreras" => "carreras.php",
        "Institucional" => "institucional.php",
        "Contacto" => "contacto.php"
    );

    // Operaciones de la clase
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function display() {
        echo "<!DOCTYPE html>\n";
        echo "<html lang=\"es\">\n<head>\n";
        echo "\t<meta charset=\"utf-8\" />\n";
        $this->displayTitle();
        $this->displayKeywords();
        $this->displayStyles("css/home.css");
        $this->displayScripts("js/modernizr.custom.lis.js");
        echo "</head>\n<body>\n";
        $this->displayHeader();
        $this->displayMenu($this->buttons);
        echo $this->content;
        $this->displayFooter();
        echo "</body>\n</html>";
    }

    public function displayTitle() {
        echo "\t<title>" . $this->title . "</title>\n";
    }

    public function displayKeywords() {
        echo "\t<meta name=\"keywords\" content=\"" . $this->keywords . "\" />\n";
    }

    public function displayStyles($estilos) {
        $styles = "";
        if (is_array($estilos)) {
            foreach ($estilos as $cssfile) {
                $styles .= "\t<link rel=\"stylesheet\" href=\"" . $cssfile . "\" />\n";
            }
        } else {
            $styles .= "\t<link rel=\"stylesheet\" href=\"" . $estilos . "\" />\n";
        }
        echo $styles;
    }

    public function displayScripts($scripts) {
        $patron = "%\.{1}(js)$%i";
        if (is_array($scripts)) {
            foreach ($scripts as $scriptfile) {
                echo "\t<script type=\"text/javascript\" src=\"" . $scriptfile . "\"></script>\n";
            }
        } else {
            if (!empty($scripts)) {
                if (preg_match($patron, $scripts)) {
                    echo "\t<script type=\"text/javascript\" src=\"" . $scripts . "\"></script>\n";
                }
            }
        }
    }

    public function displayHeader() {
        $header = <<<HEADER
        <header>
            <table width="100%" cellpadding="12" cellspacing="0" border="0">
                <tr bgcolor="black">
                    <td align="left"><img src="img/logo.gif" alt="Logo" height="70" width="70" /></td>
                    <td><h1 style="color:white; text-align:center;">Universidad Don Bosco</h1></td>
                    <td align="right"><img src="img/logo.gif" alt="Logo" height="70" width="70" /></td>
                </tr>
            </table>
        </header>
HEADER;
        echo $header;
    }

    public function displayMenu($buttons) {
        $menu = "<nav><ul id=\"mainmenu\" style=\"display:flex; list-style:none; padding:0;\">\n\t";
        $width = 100 / count($buttons);
        foreach ($buttons as $name => $url) {
            $menu .= "<li style=\"width:{$width}%; text-align:center;\">\n\t\t";
            $menu .= $this->displayButton($width, $name, $url, !$this->isURLCurrentPage($url)) . "\n\t\t";
            $menu .= "</li>\n";
        }
        $menu .= "</ul></nav>\n";
        echo $menu;
    }

    function isURLCurrentPage($url) {
        return (strpos($_SERVER['PHP_SELF'], $url) !== false);
    }

    public function displayButton($width, $name, $url, $active = true) {
        if ($active) {
            return "<a href=\"$url\"><span class=\"menu\">$name</span></a>";
        } else {
            return "<span class=\"menu\" style=\"font-weight:bold; color:blue;\">$name</span>";
        }
    }

    public function displayFooter() {
        echo <<<FOOT
        <footer id="footer" style="margin-top:20px; border-top:1px solid #ccc;">
            <p align="center">
                <a href="http://www.udb.edu.sv" target="_blank">Universidad Don Bosco</a><br>
                Centro de Estudios de Postgrados.
            </p>
        </footer>
FOOT;
    }
}
?>