<?php

include('views/header.php');
include('top-nav.php');


?>

<section id="delivery">
    <header>
        <img src="images/tomato-slice.png" alt="">
        <img src="images/parsley-leaf.png" alt="">
        <h1>
            Delivery
        </h1>
    </header>
    <img src="images/our-story-icon.svg" alt="">
    <h2>Delivery Days</h2>
    <p>
        Select which day you want your meals delivered.
        You may only select one.
    </p>

    <nav id="delivery-days">
        <img id="menu-leaf" src="images/menu-leaf.svg" alt="">

        <ul class="delivery-day active-day">
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
        <ul class="delivery-day">
            <li class="delivery-date"> 25</li>
            <li class="delivery-month"> Feb</li>
            <li class="delivery-day-name"> Sun</li>
        </ul>

    </nav>

    <button class="delivery-cta leaf-border">
        Next Step
    </button>

    <div class="section-divider"></div>

    <h2 class="meals-heading">Your Meals</h2>

    <div id="recipes-grid">
        <div class="recipe-card">
            <img class="recipe-img leaf-border" src="images/chili.jpg" alt="">

            <div class="recipe-text">
                <h3 class="recipe-title">Pancakes</h3>
                <p class="recipe-desc">
                    It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout.
                </p>

                <button class="recipe-cta leaf-border">
                    Order Now
                </button>
                <span class="recipe-price">
                    $12
                </span>
            </div>
        </div>
        <div class="recipe-card">
            <img class="recipe-img leaf-border" src="images/chili.jpg" alt="">

            <div class="recipe-text">
                <h3 class="recipe-title">Pancakes</h3>
                <p class="recipe-desc">
                    It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout.
                </p>

                <button class="recipe-cta leaf-border">
                    Order Now
                </button>
                <span class="recipe-price">
                    $12
                </span>
            </div>
        </div>
        <div class="recipe-card">
            <img class="recipe-img leaf-border" src="images/chili.jpg" alt="">

            <div class="recipe-text">
                <h3 class="recipe-title">Pancakes</h3>
                <p class="recipe-desc">
                    It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout.
                </p>

                <button class="recipe-cta leaf-border">
                    Order Now
                </button>
                <span class="recipe-price">
                    $12
                </span>
            </div>
        </div>
    </div>
</section>

<?php
include('views/footer.php');
?>