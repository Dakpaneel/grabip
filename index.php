<?php
    require_once 'meta/meta.php';
    require_once 'php/cookies.php';
    require_once 'php/ip.php';
    require_once 'php/theme.php';
    $version = 'v1.2'; // Last updated: 07/06/2019
    $copyright = date('Y').' &copy; <a href="https://www.bradleyoosterveen.nl/">bradleyoosterveen.nl</a>';
    /**
     * TODO
     * X Show IP
     * X Copy IP
     * X Header
     * X Main
     * X Footer
     * X Popup when no cookies
     * X Dark / Light theme
     * - SEO
     * X Responsive
     * X ICO
     * X Link to this GIT
     */
?>
<!DOCTYPE html>
<html>

    <head>
<title>GrabIP</title>
<?=meta()?>
<link rel="shortcut icon" type="image/x-icon" href="ico/icon.ico">
<?=load_theme()?>
    </head>

    <body>

        <?php if(!isset($_COOKIE['theme'])) {?>
            <div class="overlay">
                <?php require_once 'templates/popup.php';?>
            </div>
        <?php } else {?>
            <div class="wrapper">
                <?php require_once 'templates/header.php';?>
                <?php require_once 'templates/main.php';?>
                <?php require_once 'templates/footer.php';?>
            </div>
        <?php }?>

        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
        <script>var clipboard = new ClipboardJS('.big-text');</script><script>document.body.addEventListener('touchstart', function(e){ e.preventDefault(); });</script>
        <script src="js/app.js"></script>
    </body>
</html>