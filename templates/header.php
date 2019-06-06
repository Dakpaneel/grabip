<header>
    <form class="theme" action="php/cookies.php" method="POST">
        <?php if($_COOKIE['theme'] == 'dark') {?>
            <input type="hidden" name="type" value="light">
            <input name="theme" type="submit" value="">
            <i class="fas fa-sun"></i>
        <?php } else {?>
            <input type="hidden" name="type" value="dark">
            <input name="theme" type="submit" value="">
            <i class="fas fa-moon"></i>
        <?php }?>
        </form>
</header>