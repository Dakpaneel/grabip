<?php
    function meta() {
        // Call this function between your head tags.
        $ini = "meta/meta.ini";
        $output = "";
        if (file_exists($ini)) {
            $config = parse_ini_file($ini, true);
            if ($config["name"]) {
                foreach ($config["name"] as $key => $value) {
                    $output .= '<meta name="'.$key.'" content="'.$value.'">';
                    $output .= "\n";
                }
            }
            if ($config["shorts"]) {
                foreach ($config["shorts"] as $key => $value) {
                    $output .= '<meta '.$key.'="'.$value.'">';
                    $output .= "\n";
                }
            }
            if ($config["font"]) {
                foreach ($config["font"] as $value) {
                    $output .= '<link rel="stylesheet" href="'.$value.'">';
                    $output .= "\n";
                }
            }
            if ($config["fontawesome"]) {
                $output .= '<link rel="stylesheet" href="'.$config["fontawesome"]["href"].'" intergrity="'.$config["fontawesome"]["integrity"].'" crossorigin="'.$config["fontawesome"]["crossorigin"].'">';
                $output .= "\n";
            }
            if ($config["css"]) {
                foreach ($config["css"] as $value) {
                    $output .= '<link rel="stylesheet" href="'.$value.'">';
                    $output .= "\n";
                }
            }
        }
        echo $output;
    }
?>