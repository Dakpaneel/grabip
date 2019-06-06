<?php
    function load_theme() {
        if(isset($_COOKIE['theme'])) {
            $type = $_COOKIE['theme'];
        } else {
            $type = 'dark';
        }
        if ($type === 'dark') $css = '<link rel="stylesheet" href="css/dark.css">';
        if ($type === 'light') $css = '<link rel="stylesheet" href="css/light.css">';
    
        $css .= "\n"; // nicer HTML formatting
        return $css;
    }
?>