<nav class="top-nav">
    <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/app/views/pages/index.php">Home</a>
            <!-- <a href="../app/views/index.php">Home</a> -->
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/about">About</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/projects">Projects</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/posts">Blog</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/contact">Contact</a>
        </li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>

<!-- define('URLROOT', 'http://localhost/RootPHP/MVC/MVC_LogIn_6'); -->