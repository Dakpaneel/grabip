<?php
    function set_cookie($value) {
        $key = "theme";
        setcookie(
            $key,
            $value,
            time() + (86400 * 365),
            '/'
        );
    }

    if (isset($_POST['continue'])) {
        set_cookie('dark');
        header("Refresh:0");
    }
    if (isset($_POST['theme'])) {
        if ($_POST['type'] === 'dark') {
            set_cookie('dark');
            header("Refresh:0");
        } elseif ($_POST['type'] === 'light') {
            set_cookie('light');
            header("Refresh:0");
        }
    }
?>