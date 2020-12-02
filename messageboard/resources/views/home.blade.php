@extends('master')
@section('title', 'Homepage')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Coffee <span>Aroma</span></h2>
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                                <a href="#check-table" class="btn-book animate__animated animate__fadeInUp scrollto">Find a table</a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Coming Soon!</h2>
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                                <a href="#check-table" class="btn-book animate__animated animate__fadeInUp scrollto">Find a Table</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- End Hero -->
@endsection

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="section-title">
                <h2>Who are <span>we</span>?</h2>
                <p> Established in 2005, Coffee Aroma offers barista-championship standard coffee in Lincoln. </p>
                <p> Hosting the widest selection of single origin coffee, we offer only the highest quality products and our award-winning experience is demonstrated through the staff that we train. </p>
                <p> Contributing as a valued member of the world coffee community, we are proud to have worked with some of the most knowledgable people in the industry. We hope you can see and taste the reason why we have been voted one of the top 10 coffee shops in the UK, by The Guardian newspaper. </p> 
                <p> Come and visit us to find a coffee that best suits you, we love to share good coffee. </p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End About Section -->
    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
    <div class="container">
        <div class="section-title">
            <h2>Why choose <span>Our Restaurant</span></h2>
            <p>Check out below the reviews!</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="box">
                <span>01</span>
                <h4>The Sunday Times 2017</h4>
                <p>" One of the top 25 Coffee Houses in the UK. "</p>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="box">
                <span>02</span>
                <h4>The Guardian Newspaper 2010</h4>
                <p>" One of the best 10 coffee shops in the UK. "</p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End Whu Us Section -->
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
    <div class="container">
        <div class="section-title">
            <h2>Check our tasty <span>Menu</span></h2>
            <p>Also available with Duchy Organic Unhomogenised milk OR Lactose Free Milk OR Soya</p>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                <li data-filter="*" class="filter-active">Show All</li>
                <li data-filter=".filter-coffee">Coffee Based</li>
                <li data-filter=".filter-hc">Hot Chocolate</li>
                <li data-filter=".filter-tea">Tea Based</li>
                <li data-filter=".filter-cake">Cake & Muffins</li>
                <li data-filter=".filter-pastries">Pastries / Breakfast</li>
                <li data-filter=".filter-sandwich">Sandwich / Toasties</li>
                <li data-filter=".filter-snacks">Snacks</li>
                <li data-filter=".filter-soft">Soft Drinks</li>
                <li data-filter=".filter-beer">Beer / Ale / Cider</li>
                <li data-filter=".filter-spirits">Spirits</li>
                <li data-filter=".filter-wine">Wine</li>
                <li data-filter=".filter-cocktails">Aroma Cocktails</li>
                </ul>
            </div>
        </div>
        <div class="row menu-container">
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Double Espresso</a><span class="btn btn-primary" onclick="addItemToCart()"><i class="icofont-ui-add"></i></span>
                </div>
                <div class="menu-ingredients">
                60ml served with sparkling water
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Macchiato</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                Double Espresso marked with milk
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Cortado</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                60ml of milk* + double espresso
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Flat White</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                100ml of milk* + double espresso
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Cappucino</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                125ml of milk* + single espresso & single espresso on the side
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Latte</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                175 of milk* + single espresso & single espresso on the side
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Caramel Latte</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                175ml of milk* + single espresso & single espresso on the side
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Vanilla Latte</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                175ml of milk* + single espresso & single espresso on the side
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Mocha</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                Dark or white chocolate + 175ml of milk*
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Boozy Special</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                Dark Mocha with Cointreau - 125ml of milk
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Black Tonic</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                Double espresso served over Fever Tree Tonic & Ice 
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Iced Coffee</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                Espresso over ice
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-coffee">
                <div class="menu-content">
                <a href="#menu">Filter Coffee</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                Changes weekly depending on the season - check inside cafe
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-hc">
                <div class="menu-content">
                <a href="#menu">Dark Hot Chocolate</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-hc">
                <div class="menu-content">
                <a href="#menu">White Hot Chocolate</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-hc">
                <div class="menu-content">
                <a href="#menu">Venezuelan Black Hot Chocolate with Duchy Organic Unhomogenised milk</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-hc">
                <div class="menu-content">
                <a href="#menu">Alcoholic Coffee</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-tea">
                <div class="menu-content">
                <a href="#menu">Breakfast</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-tea">
                <div class="menu-content">
                <a href="#menu">Green</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-tea">
                <div class="menu-content">
                <a href="#menu">Earl Grey</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-tea">
                <div class="menu-content">
                <a href="#menu">Blood Orange</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-tea">
                <div class="menu-content">
                <a href="#menu">Peppermint</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-tea">
                <div class="menu-content">
                <a href="#menu">Jasmine</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-tea">
                <div class="menu-content">
                <a href="#menu">Super Jasmine Dragon Phoenix Pearls</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-tea">
                <div class="menu-content">
                <a href="#menu">Moroccan Fresh Mint Tea</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-cake">
                <div class="menu-content">
                <a href="#menu">Coffee & Walnut Cake</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-cake">
                <div class="menu-content">
                <a href="#menu">Coffee & Walnut Cake</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-cake">
                <div class="menu-content">
                <a href="#menu">Red Velvet Cake</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-cake">
                <div class="menu-content">
                <a href="#menu">Rockslide Brownie</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-cake">
                <div class="menu-content">
                <a href="#menu">Macaroons</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-cake">
                <div class="menu-content">
                <a href="#menu">Milk Chocolate Cookie</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-cake">
                <div class="menu-content">
                <a href="#menu">Blueberry Tulip Muffin</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-cake">
                <div class="menu-content">
                <a href="#menu">Raspberry Almond Frangipane</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-cake">
                <div class="menu-content">
                <a href="#menu">Chocolate & Coconut Flapjack</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-sandwich">
                <div class="menu-content">
                <a href="#menu">Chicken & Bacon Mayo</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                On a Barra Gallega Media Spanish Pilgrim bread
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-sandwich">
                <div class="menu-content">
                <a href="#menu">Tuna & Mayo with Cucumber</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                On a Barra Gallega Media Spanish Pilgrim bread
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-sandwich">
                <div class="menu-content">
                <a href="#menu">Coronation Chicken</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                On a Barra Gallega Media Spanish Pilgrim bread
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-sandwich">
                <div class="menu-content">
                <a href="#menu">French Brie & Cherry Tomatoes</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                On a Barra Gallega Media Spanish Pilgrim bread
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-sandwich">
                <div class="menu-content">
                <a href="#menu">French Brie & Prosciuto Crudo</a><span>$</span>
                </div>
                <div class="menu-ingredients">
                On a Barra Gallega Media Spanish Pilgrim bread
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-sandwich">
                <div class="menu-content">
                <a href="#menu">Brie and Cranberry Toasted Panini</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-sandwich">
                <div class="menu-content">
                <a href="#menu">Prosciuto Crudo and French Brie Toasted Panini</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-sandwich">
                <div class="menu-content">
                <a href="#menu">Chorizo and Lincolnshire Cotehill Blue Cheese Toasted Panini</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-snacks">
                <div class="menu-content">
                <a href="#menu">Salty Dog Crisps</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-snacks">
                <div class="menu-content">
                <a href="#menu">Salty Dog Nuts</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-soft">
                <div class="menu-content">
                <a href="#menu">Fresh Orange Juice</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-soft">
                <div class="menu-content">
                <a href="#menu">Hildon Still Mineral Water</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-soft">
                <div class="menu-content">
                <a href="#menu">San Pellegrino Sparkling Natural Mineral Water 250ml</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-soft">
                <div class="menu-content">
                <a href="#menu">San Pellegrino Aranciata</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-soft">
                <div class="menu-content">
                <a href="#menu">San Pellegrino Sparkling Grapefruit</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-soft">
                <div class="menu-content">
                <a href="#menu">San Pellegrino Blood Orange</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-soft">
                <div class="menu-content">
                <a href="#menu">San Pellegrino Limonata</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-soft">
                <div class="menu-content">
                <a href="#menu">Fentimans Ginger Beer</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-soft">
                <div class="menu-content">
                <a href="#menu">Fentimans Curisity Cola</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-soft">
                <div class="menu-content">
                <a href="#menu">Fentimans Wild English Elderflower</a><span>$</span>
                </div>
            </div>
            <div class="col-lg-6 menu-item filter-soft">
                <div class="menu-content">
                <a href="#menu">Fresh Fruit Smoothies</a><span>$</span>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End Menu Section -->
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
    <div class="container">
        <div class="section-title">
            <h2>Organize Your <span>Events</span> in our Restaurant (coming soon)</h2>
        </div>
       <!--- <div class="owl-carousel events-carousel">
            <div class="row event-item">
                <div class="col-lg-6">
                <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Birthday Parties</h3>
                <div class="price">
                    <p><span>$189</span></p>
                </div>
                <p class="font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                </ul>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                </p>
                </div>
            </div>
            <div class="row event-item">
                <div class="col-lg-6">
                <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Private Parties</h3>
                <div class="price">
                    <p><span>$290</span></p>
                </div>
                <p class="font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                </ul>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                </p>
                </div>
            </div>
            <div class="row event-item">
                <div class="col-lg-6">
                <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Custom Parties</h3>
                <div class="price">
                    <p><span>$99</span></p>
                </div>
                <p class="font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                </ul>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                </p>
                </div>
            </div>
        </div>-->
    </div>
    </section>
    <!-- End Events Section -->
    <!-- ======= Book A Table Section ======= -->
    <section id="check-table" class="check-table">
    <div class="container">
        <div class="section-title">
            <h2>Check if there's a free <span>table</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
        <form action="forms/check-table.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
                <div class="col-lg-4 col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                <div class="validate"></div>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
    </div>
    </section>
    <!-- End Book A Table Section -->
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
    <div class="container-fluid">
        <div class="section-title">
            <h2>Some photos from <span>Our Restaurant</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="http://coffeearoma.co.uk/images/coffearoma_filtercoffee.jpg" class="venobox" data-gall="gallery-item">
                        <img src="http://coffeearoma.co.uk/images/coffearoma_filtercoffee.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="http://coffeearoma.co.uk/images/coffee-aroma-main-bar.jpg" class="venobox" data-gall="gallery-item">
                        <img src="http://coffeearoma.co.uk/images/coffee-aroma-main-bar.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="http://coffeearoma.co.uk/images/coffearoma_epressodrinks.jpg" class="venobox" data-gall="gallery-item">
                        <img src="http://coffeearoma.co.uk/images/coffearoma_epressodrinks.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="http://coffeearoma.co.uk/images/coffearoma_cake.jpg" class="venobox" data-gall="gallery-item">
                        <img src="http://coffeearoma.co.uk/images/coffearoma_cake.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End Gallery Section -->
    <!-- ======= Testimonials Section =======
    <section id="testimonials" class="testimonials">
        <div class="container">
    
            <div class="owl-carousel testimonials-carousel">
    
            <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                </div>
                <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
    
            <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                </div>
                <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
    
            <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                </div>
                <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
    
            <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                </div>
                <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
    
            <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                </div>
                <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
    
            </div>
    
        </div>
    </section>End Testimonials Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2><span>Contact</span> Us</h2>
        </div>
    </div>
    <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2388.360950225394!2d-0.5431590839682614!3d53.229305691172215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48785b253df62bb7%3A0x1f290f86b427de1d!2sCoffee%20Aroma!5e0!3m2!1sen!2suk!4v1606734056712!5m2!1sen!2suk" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="container mt-5">
        <div class="info-wrap">
            <div class="row">
                <div class="col-lg-4 col-md-6 info">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Coffee Aroma 24 Guildhall Street Lincoln LN1 1TR United Kingdom</p>
                </div>
                <div class="col-lg-4 col-md-6 info mt-4 mt-lg-0">
                <i class="icofont-clock-time icofont-rotate-90"></i>
                <h4>Open Hours:</h4>
                <p>Monday-Friday:<br>09:30 AM - 17:00 PM</p>
                <p>Saturday:<br>09:30 AM - 22:00 PM</p>
                <p>Sunday:<br>10:00 AM - 17:00 PM</p>
                </div>
                <div class="col-lg-4 col-md-6 info mt-4 mt-lg-0">
                <i class="icofont-phone"></i>
                <h4>Contact:</h4>
                <p>+44 (0)1522 569 892<br>Twitter: @cofee_aroma</p>
                </div>
            </div>
        </div>
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
                <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
    </div>
    </section>
    <!-- End Contact Section -->
@endsection