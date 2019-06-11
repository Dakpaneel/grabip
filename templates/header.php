<header>
    <form class="theme" action="" method="POST">
        <?php if($_COOKIE['theme'] == 'dark') {?>
            <input type="hidden" name="type" value="light">
            <input name="theme" type="submit" value="">
            <i class="fas fa-sun"></i>
        <?php } else if($_COOKIE['theme'] == 'light'){?>
            <input type="hidden" name="type" value="dark">
            <input name="theme" type="submit" value="">
            <i class="fas fa-moon"></i>
        <?php } else {?>
            <input type="hidden" name="type" value="dark">
            <input name="theme" type="submit" value="">
            <i class="fas fa-undo-alt"></i>
        <?php }?>
        </form>
</header>