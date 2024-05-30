<?php

include('views/header.php');
include('views/onboarding-nav.php');


?>

<section id="meal-plans">
    <header>
        <img src="images/tomato-slice.png" alt="">
        <img src="images/parsley-leaf.png" alt="">
        <h1>
            Meal Plans
        </h1>
        <img id="menu-leaf" src="images/menu-leaf.svg" alt="">
    </header>

    <img src="images/our-story-icon.svg" alt="">
    <h2 id="plans-header">Starter Plans</h2>
    <p>
        To get started select a plan below. You may customize
        your plan later if you would like.
    </p>

    <div id="plan-wrapper">
        <div class="plan active-plan">
            <div class="plan-inner">
                <h3>Single</h3>
                <div class="plan-inner-images">
                    <img class="leaf-border" src="images/curry.jpg" alt="">
                </div>
                <div class="plan-text">
                    <ul class="plan-price">
                        <li>$100 Per Week</li>
                        <li>$10 Per Serving</li>
                        <li>$28 in Savings</li>
                    </ul>
                    <p class="plan-desc">
                        Ideal for young busy professionals or college
                        students who just don't have time to cook.
                    </p>
                </div>
                <div class="plan-details">
                    <div class="plan-servings-qty">
                        <h5>
                            Servings Per Meal
                        </h5>
                        <span>
                            2
                        </span>
                    </div>
                    <div class="qty-divider"></div>
                    <div class="plan-meals-qty">
                        <h5>
                            Meals Per Week
                        </h5>
                        <span>
                            2
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="plan double-plan">
            <div class="plan-inner">
                <h3>Double</h3>
                <div class="plan-inner-images">
                    <img class="leaf-border" src="images/curry.jpg" alt="">
                    <img class="leaf-border" src="images/curry.jpg" alt="">
                </div>
                <div class="plan-text">
                    <ul class="plan-price">
                        <li>$100 Per Week</li>
                        <li>$10 Per Serving</li>
                        <li>$28 in Savings</li>
                    </ul>
                    <p class="plan-desc">
                        Best suited for busy couples looking for a convenient way
                        of getting essential nutrients. Or maybe it's just you but
                        a single plan just won't cut it.
                    </p>
                </div>
                <div class="plan-details">
                    <div class="plan-servings-qty">
                        <h5>
                            Servings Per Meal
                        </h5>
                        <span>
                            2
                        </span>
                    </div>
                    <div class="qty-divider"></div>
                    <div class="plan-meals-qty">
                        <h5>
                            Meals Per Week
                        </h5>
                        <span>
                            2
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="plan bulk-plan">
            <div class="plan-inner">
                <h3>Bulk</h3>
                <div class="plan-inner-images">
                    <img class="leaf-border" src="images/curry.jpg" alt="">
                    <img class="leaf-border" src="images/curry.jpg" alt="">
                    <img class="leaf-border" src="images/curry.jpg" alt="">
                    <img class="leaf-border" src="images/curry.jpg" alt="">
                </div>
                <div class="plan-text">
                    <ul class="plan-price">
                        <li>$100 Per Week</li>
                        <li>$10 Per Serving</li>
                        <li>$28 in Savings</li>
                    </ul>
                    <p class="plan-desc">
                        Catered to families of 3 or 4. Maybe you're a parent
                        that wants their kids on a healthy diet but its tough
                        to put together a fresh home-cooked meal.
                    </p>
                </div>
                <div class="plan-details">
                    <div class="plan-servings-qty">
                        <h5>
                            Servings Per Meal
                        </h5>
                        <span>
                            2
                        </span>
                    </div>
                    <div class="qty-divider"></div>
                    <div class="plan-meals-qty">
                        <h5>
                            Meals Per Week
                        </h5>
                        <span>
                            2
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="plan-cta leaf-border">
        Next Step
    </button>
</section>

<?php

include('views/footer.php');

?>