<pre>
    <?php echo print_r($user_profile, TRUE) ?>
</pre>
<a href="<?= $logout_url ?>">Logout</a>
<?php else: ?>
    <h2>Welcome, please login below</h2>
    <a href="<?= $login_url ?>">Login</a>
<?php endif; ?>