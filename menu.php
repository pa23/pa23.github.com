<?php

    function menu_item($ref, $name, $current_page) {

        echo "<TD WIDTH=20% STYLE=\"border: none; padding: 0cm\">\n";

        if ( $current_page == basename($ref, ".php") ) {

            echo "<P ALIGN=CENTER STYLE=\"background: #e6e6ff; border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: none; border-right: none; padding: 0.1cm 0cm\">\n";
        }
        else {

            echo "<P ALIGN=CENTER STYLE=\"border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: none; border-right: none; padding: 0.1cm 0cm\">\n";
        }

        echo "<A HREF=\"$ref\">$name</A></P>\n";
        echo "</TD>\n";
    }

    function menu($current_page) {

        echo "<TABLE WIDTH=100% CELLPADDING=5 CELLSPACING=0>\n";
        echo "<TR VALIGN=TOP>\n";

        menu_item("http://pa23.github.com/index.php", "Главная", $current_page);
        menu_item("http://pa23.github.com/blog.php", "Блог", $current_page);
        menu_item("http://pa23.github.com/projects.php", "Проекты", $current_page);
        menu_item("http://pa23.github.com/links.php", "Ссылки", $current_page);
        menu_item("http://pa23.github.com/blog_archive.php", "Архив", $current_page);

        echo "</TR>\n";
        echo "</TABLE>\n";
        echo "<BR>\n";
    }

?>
