<?php

include('views/header.php');
include('top-nav.php');

?>

<section id="meal-plans">
    <header>
        <img src="images/tomato-slice.png" alt="">
        <img src="images/parsley-leaf.png" alt="">
        <h1>
            Your Order
        </h1>
        <!--<img id="menu-leaf" src="images/menu-leaf.svg" alt="">-->
    </header>
    <form action="">
        <div class="order-section">
            <div class="address-wrapper">
                <h2>What Day?</h2>
                <nav class="delivery-days">

                    <ul class="delivery-day active-day">
                        <li class="delivery-date"> 11</li>
                        <li class="delivery-month">Feb</li>
                        <li class="delivery-day-name">Sun</li>
                    </ul>
                    <ul class="delivery-day">
                        <li class="delivery-date"> 25</li>
                        <li class="delivery-month"> Feb</li>
                        <li class="delivery-day-name"> Sun</li>
                    </ul>
                    <ul class="delivery-day">
                        <li class="delivery-date"> 25</li>
                        <li class="delivery-month"> Feb</li>
                        <li class="delivery-day-name"> Sun</li>
                    </ul>
                    <ul class="delivery-day">
                        <li class="delivery-date"> 25</li>
                        <li class="delivery-month"> Feb</li>
                        <li class="delivery-day-name"> Sun</li>
                    </ul>
                    <ul class="delivery-day">
                        <li class="delivery-date"> 25</li>
                        <li class="delivery-month"> Feb</li>
                        <li class="delivery-day-name"> Sun</li>
                    </ul>
                    <ul class="delivery-day">
                        <li class="delivery-date"> 25</li>
                        <li class="delivery-month"> Feb</li>
                        <li class="delivery-day-name"> Sun</li>
                    </ul>
                    <ul class="delivery-day">
                        <li class="delivery-date"> 25</li>
                        <li class="delivery-month"> Feb</li>
                        <li class="delivery-day-name"> Sun</li>
                    </ul>
                </nav>
                <!--
                <div class="day-options">
                    <input type="radio" id="same-days" name="delivery-days" value="same-days" checked>
                    <label for="same-days" class="radio-label">Same Day(s) Next Week</label><br>

                    <input type="radio" id="different-days" name="delivery-days" value="different-days">
                    <label for="different-days" class="radio-label">Different Days</label><br>
                </div>
-->
                <h2>What Address?</h2>
                <div class="address">
                    <form action="includes/address.inc.php" method="post">
                        <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">

                        <div class="input-row col-2">
                            <div class="input-wrapper">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" placeholder="Enter First Name" required>
                            </div>

                            <div class="input-wrapper">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" placeholder="Enter Last Name" required>
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-wrapper">
                                <label for="address_1">Address 1</label>
                                <input type="text" name="address_1" placeholder="Enter Address" required>
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-wrapper">
                                <label for="address_2">Address 2</label>
                                <input type="text" name="address_2" placeholder="apartment #, floor #, etc.">
                            </div>
                        </div>

                        <div class="input-row col-3">
                            <div class="input-wrapper">
                                <label for="city">City</label>
                                <input type="text" name="city" placeholder="Enter City" required>
                            </div>

                            <div class="input-wrapper">
                                <label for="state">State</label>
                                <select name="state">
                                    <option value="MA">MA</option>
                                    <option value="RI">RI</option>
                                </select>
                            </div>

                            <div class="input-wrapper">
                                <label for="zip_code">Zip Code</label>
                                <input type="text" name="zip_code" placeholder="Enter Zip Code" required>
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-wrapper">
                                <label for="phone">Mobile Phone</label>
                                <input type="tel" name="phone" placeholder="(555) 777-1234" required>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="summary-wrapper">
                <h2>Summary</h2>
                <div class="summary">
                    <div class="summary-plan">
                        <h4 class="summary-plan-title">
                            Meal Plan
                        </h4>

                        <div class="summary-meal-plan">
                            <div class="summary-meal-imgs">
                                <img src="images/chili.jpg" alt="" class="leaf-border">
                                <img src="images/chili.jpg" alt="" class="leaf-border">
                                <img src="images/chili.jpg" alt="" class="leaf-border">
                                <img src="images/chili.jpg" alt="" class="leaf-border">
                            </div>
                            <span class="meal-plan-type">
                                Single
                            </span>
                        </div>
                    </div>
                    <ul class="summary-items">

                        <li class="item">
                            <div class="item-img">
                                <img src="images/chili.jpg" alt="" class="leaf-border">
                            </div>
                            <ul class="item-text">
                                <li class="item-title">
                                    <b>Recipe:</b>
                                    <span>
                                        Indian Curry
                                    </span>
                                </li>
                                <li class="item-qty">
                                    <b>Qty:</b>
                                    <span>
                                        2
                                    </span>
                                </li>

                                <li class="item-ingredients" title="Tofu, Turmeric, Tomatoes, Collard Greens">
                                    <b>Ingredients:</b>
                                    <span>
                                        Tofu, Turmeric
                                    </span>
                                </li>
                            </ul>
                        </li>

                        <li class="item">
                            <div class="item-img">
                                <img src="images/chili.jpg" alt="" class="leaf-border">
                            </div>
                            <ul class="item-text">
                                <li class="item-title">
                                    <b>Recipe:</b>
                                    <span>
                                        Indian Curry
                                    </span>
                                </li>
                                <li class="item-qty">
                                    <b>Qty:</b>
                                    <span>
                                        2
                                    </span>
                                </li>

                                <li class="item-ingredients" title="Tofu, Turmeric, Tomatoes, Collard Greens">
                                    <b>Ingredients:</b>
                                    <span>
                                        Tofu, Turmeric...
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="item">
                            <div class="item-img">
                                <img src="images/chili.jpg" alt="" class="leaf-border">
                            </div>
                            <ul class="item-text">
                                <li class="item-title">
                                    <b>Recipe:</b>
                                    <span>
                                        Indian Curry
                                    </span>
                                </li>
                                <li class="item-qty">
                                    <b>Qty:</b>
                                    <span>
                                        2
                                    </span>
                                </li>

                                <li class="item-ingredients" title="Tofu, Turmeric, Tomatoes, Collard Greens">
                                    <b>Ingredients:</b>
                                    <span>
                                        Tofu, Turmeric
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="item">
                            <div class="item-img">
                                <img src="images/chili.jpg" alt="" class="leaf-border">
                            </div>
                            <ul class="item-text">
                                <li class="item-title">
                                    <b>Recipe:</b>
                                    <span>
                                        Indian Curry
                                    </span>
                                </li>
                                <li class="item-qty">
                                    <b>Qty:</b>
                                    <span>
                                        2
                                    </span>
                                </li>

                                <li class="item-ingredients" title="Tofu, Turmeric, Tomatoes, Collard Greens">
                                    <b>Ingredients:</b>
                                    <span>
                                        Tofu, Turmeric
                                    </span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="checkout-divider"></div>
                    <ul class="checkout-totals">
                        <li>
                            <span class="total-name">Meal Plan</span>
                            <span class="total-cost">$78.99</span>
                        </li>
                        <li>
                            <span class="total-name">Delivery Fee</span>
                            <span class="total-cost">$6.99</span>
                        </li>
                        <li>
                            <span class="total-name">Estimated Total</span>
                            <span class="total-cost">$85.98</span>
                        </li>
                    </ul>
                    <input type="submit" class="order-btn leaf-border checkout-btn" value="Checkout">
                </div>

            </div>
        </div>
    </form>

</section>

<?php

include('views/footer.php');

?>

<script src="scripts/delivery.js"></script>