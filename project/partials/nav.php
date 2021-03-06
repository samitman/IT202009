<?php
//we'll be including this on most/all pages so it's a good place to include anything else we want on those pages
require_once(__DIR__ . "/../lib/helpers.php");
?>
<link rel="stylesheet" href="<?php echo getURL("static/css/styles.css"); ?>">

<nav>
    <h1 id = "title">Sam's Supps</h1>
    <ul class="nav">
        <li><a href="<?php echo getURL("home.php");?>">Home</a></li>
        <?php if (!is_logged_in()): ?>
            <li><a href="<?php echo getURL("login.php"); ?>">Login</a></li>
            <li><a href="<?php echo getURL("register.php"); ?>">Register</a></li>
        <?php endif; ?>
        <?php if (has_role("Admin")): ?>
            <li><a href="<?php echo getURL("test/test_create_product.php"); ?>">Create Product</a></li>
        <?php endif; ?>
        <?php if (is_logged_in()): ?>
            <li><a href="<?php echo getURL("catalog.php"); ?>">Catalog</a></li>
            <li><a href="<?php echo getURL("search.php"); ?>">Search</a></li>
            <li><a href="<?php echo getURL("cart.php"); ?>">Cart</a></li>
            <li><a href="<?php echo getURL("orders.php"); ?>">Orders</a></li>
            <li><a href="<?php echo getURL("profile.php"); ?>?id=<?php echo get_user_id()?>">Profile</a></li>
            <li><a href="<?php echo getURL("logout.php");?>">Logout</a></li>
        <?php endif; ?>
    </ul>
</nav>