<?php
    function load_theme() {
        if(isset($_COOKIE['theme'])) {
            $type = $_COOKIE['theme'];
        } else {
            $type = 'dark';
        }
        $css = '<link rel="stylesheet" href="css/'.$type.'.css">';
    
        $css .= "\n"; // nicer HTML formatting
        return $css;
    }
?>