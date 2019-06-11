<?php
    require_once 'meta/meta.php';
    require_once 'php/cookies.php';
    require_once 'php/ip.php';
    require_once 'php/theme.php';
    $version = 'v1.3'; // Last updated: 10/06/2019
    $copyright = date('Y').' &copy; <a href="https://www.bradleyoosterveen.nl/">bradleyoosterveen.nl</a>';
?>
<!DOCTYPE html>
<html>

    <head>
<title>IP &bull; <?=get_ip()?></title>
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
                <?php require_once 'templates/notification.php';?>
                <?php require_once 'templates/header.php';?>
                <?php require_once 'templates/main.php';?>
                <?php require_once 'templates/footer.php';?>
            </div>
        <?php }?>

        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
        <script>var clipboard = new ClipboardJS('.clipboard');</script><script>document.body.addEventListener('touchstart', function(e){ e.preventDefault(); });</script>
        <script src="js/app.js"></script>
    </body>
</html>