<nav class="top-nav">
    <div class="inner-nav">
        <div class="logo-wrapper">
            <a href="/new-vegprep/public"><img src="./images/vegprep-logo.png" alt="logo"></a>
        </div>

        <div class="nav-links-wrapper">
            <!--<span class="dropdown-icon">
                <img src="images/dropdown-nav-icon.svg" alt="dropdown">
            </span>-->
            <ul class="nav-links">
                <li class="<?= ($curr_page == 'menu.php')     ? 'active-link' : ''; ?>"><a href="menu">Menu</a></li>
                <!--<li class="<?= ($curr_page == 'recipes.php')  ? 'active-link' : ''; ?>"><a href="recipes">Recipes</a></li>-->
                <li class="<?= ($curr_page == 'plans.php')    ? 'active-link' : ''; ?>"><a href="plans">Plans</a></li>
                <!--<li class="divider">|</li>-->

                <li class="<?= ($curr_page == 'delivery.php') ? 'active-link' : ''; ?>"><a href="delivery">Delivery</a></li>
                <li class="<?= ($curr_page == 'order.php') ? 'active-link' : ''; ?>"><a href="order">Checkout</a></li>
            </ul>
        </div>

        <div class="log-btn-wrapper">

            <?php if (isset($_SESSION['user_id'])) { ?>

                <button class="leaf-border"><a href="logout">Logout</a></button>

            <?php } else { ?>

                <button class="leaf-border <?= ($curr_page == 'login.php')  ?   'active-link' : ''; ?>"><a href="login">Login</a></button>
                <!--<button class="leaf-border <?= ($curr_page == 'sign-up.php')  ? 'active-link' : ''; ?>"><a href="sign-up">Sign Up</a></button>-->

            <?php } ?>

        </div>
    </div>
</nav>