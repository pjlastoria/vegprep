<?php

include('views/header.php');
include('top-nav.php');


?>

<div class="bg-rect"></div>

<section id="hero">

    <div class="hero-left">

        <div class="hero-text-wrapper">
            <h1 class="hero-headline">
                Good Food For Good Health
            </h1>

            <div class="hero-cta">
                <p class="cta-desc">
                    It is a long established fact that a reader will be distracted by the
                    readable content of a page when looking at its layout. The point of using
                    Lorem Ipsum is that it has a more-or-less normal distribution of letters
                </p>
                <form id="hero-form">
                    <input type="text" placeholder="Enter Your Zipcode" name="zipcode">
                    <input type="button" value="Check Now">
                </form>

                <p class="hero-disclaimer">
                    As of right now we only serve the Southwest Massachusetts and East Rhode Island areas.<br>
                    But you may signup for future updates.
                </p>
            </div>
        </div>


        <div class="hero-benefit-wrapper">
            <div class="hero-benefit leaf-border">
                <div class="benefit-img leaf-border">
                    <img src="images/delivery-scooter.svg" alt="">
                </div>
                <div class="benefit-text">
                    <h4>Fast Delivery</h4>
                    <span>Within 30 Minutes</span>
                </div>
            </div>

            <div class="hero-benefit leaf-border">
                <div class="benefit-img leaf-border">
                    <img src="images/knife-and-fork.svg" alt="">
                </div>
                <div class="benefit-text">
                    <h4>Pick Up</h4>
                    <span>Schedule the Time Best For You</span>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-right">
        <img id="hero-img" src="images/hero-img.png" />

        <img id="bg-parsley-leaf" src="images/parsley-leaf.png" />
        <img id="bg-tomato-vine" src="images/vine-tomatoes.png" />
        <img id="bg-chili-pepper" src="images/chili-pepper.png" />
        <img id="bg-tomato-slice" src="images/tomato-slice.png" />

    </div>



</section>

<section id="our-story">
    <div class="story-wrapper">

        <div class="story-half">
            <img class="bg-leaf top-leaf" src="images/top-leaf.svg" />

            <div class="story-image-wrapper top-imgs">
                <div class="story-img-holder-lg">
                    <img class="story-img" src="images/curry.jpg" alt="">
                </div>
                <div class="story-img-holder-sm">
                    <img class="story-img" src="images/curry.jpg" alt="">
                </div>
            </div>
            <div class="story-image-wrapper bottom-imgs">
                <div class="story-img-holder-sm">
                    <img class="story-img" src="images/curry.jpg" alt="">
                </div>
                <div class="story-img-holder-lg">
                    <img class="story-img" src="images/curry.jpg" alt="">
                </div>
            </div>

            <img class="bg-leaf bottom-leaf" src="images/bottom-leaf.svg" />
        </div>

        <div class="story-text story-half">
            <img src="images/our-story-icon.svg" alt="">
            <h3 class="story-heading-cursive">Our Story</h3>
            <h2 class="story-heading-lg">We Are Veg Prep</h2>
            <h3 class="story-heading">The Delicious Story</h3>

            <p class="story-description">
                It is a long established fact that a reader will be distracted by
                the readable content of a page when looking at its layout. The point
                of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters.
            </p>
            <p class="story-description">
                It is a long established fact that a reader will be distracted by
                the readable content of a page when looking at its layout. The point
                of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters.
            </p>

            <button class="story-cta leaf-border">
                Read More
            </button>
        </div>
    </div>
</section>

<section id="perks">
    <div class="perks-wrapper">
        <div class="perk-container leaf-border">
            <img class="perk-img" src="images/perk-ui.svg" alt="">
            <h3 class="perk-heading">
                Order Subscription
            </h3>
            <p class="perk-desc">
                There are many variations of Lorem Ipsum but this is best.
            </p>
        </div>
        <div class="perk-container leaf-border">
            <img class="perk-img" src="images/perk-scooter.svg" alt="">
            <h3 class="perk-heading">
                Order Subscription
            </h3>
            <p class="perk-desc">
                There are many variations of Lorem Ipsum but this is best.
            </p>
        </div>
        <div class="perk-container leaf-border">
            <img class="perk-img last-img" src="images/perk-vegetable.svg" alt="">
            <h3 class="perk-heading">
                Order Subscription
            </h3>
            <p class="perk-desc">
                There are many variations of Lorem Ipsum but this is best.
            </p>
        </div>
    </div>
</section>

<section id="recipes">
    <img id="menu-leaf" src="images/menu-leaf.svg" alt="">

    <header>
        <img src="images/our-story-icon.svg" alt="">
        <h3 class="story-heading-cursive">Fresh and Healthy Dishes</h3>
        <h2 class="story-heading-lg">Our Mouth Watering Offerings</h2>

        <nav>
            <button class="recipe-tab active-tab leaf-border">
                Breakfast
            </button>
            <button class="recipe-tab leaf-border">
                Lunch
            </button>
            <button class="recipe-tab leaf-border">
                Dinner
            </button>
        </nav>

    </header>

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

<section id="testimonials">
    <header>
        <img src="images/testimonial-icon.svg" alt="">
        <h2>
            What Our Customers Say
        </h2>
    </header>

    <div class="testimonial-wrapper">
        <div class="testimonial-btn prev">
            <img src="images/left-arrow.svg" alt="">
        </div>

        <div class="testimonial-slideshow">
            <div class="testimonial-slide">
                <div class="testimonial-pic-wrapper">
                    <img src="images/left-leaf.svg" alt="">
                    <img id="testimonial-pic" src="images/single.svg" alt="">
                    <img src="images/right-leaf.svg" alt="">
                </div>

                <ul class="testimonial-text">
                    <li class="testimonial">
                        This cozy restaurant has left the best impressions! Hospitable hosts,
                        delicious dishes, beautiful presentation, wide wine list and wonderful
                        dessert. I recommend to everyone! I would like to come back here again
                        and again.
                    </li>
                    <li class="testimonial-name">
                        Kevin Flynn
                    </li>
                    <li class="testimonial-desc">
                        CEO of Enron
                    </li>
                </ul>
            </div>
        </div>

        <div class="testimonial-btn next">
            <img src="images/right-arrow.svg" alt="">
        </div>
    </div>
</section>

<?php

include('views/footer.php');

?>

</div>
</div>
</body>

</html>