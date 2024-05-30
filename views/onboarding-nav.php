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
                <li class="<?= ($curr_page == 'plans.php')    ? 'active-link' : ''; ?>"><a href="plans">Plans</a></li>
                <li class="nav-tab-divider"></li>
                <li class="<?= ($curr_page == 'meals.php')     ? 'active-link' : ''; ?>"><a href="menu">Meals</a></li>
                <li class="nav-tab-divider"></li>
                <li class="<?= ($curr_page == 'meals.php')     ? 'active-link' : ''; ?>"><a href="menu">Account</a></li>
                <li class="nav-tab-divider"></li>
                <li class="<?= ($curr_page == 'delivery.php') ? 'active-link' : ''; ?>"><a href="delivery">Delivery</a></li>
                <li class="nav-tab-divider"></li>
                <li class="<?= ($curr_page == 'order.php') ? 'active-link' : ''; ?>"><a href="order">Checkout</a></li>
            </ul>
        </div>

        <div class="log-btn-wrapper">




        </div>
    </div>
</nav>