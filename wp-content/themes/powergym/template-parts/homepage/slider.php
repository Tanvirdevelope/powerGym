<section class=" slider_section position-relative">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            //if (have_posts()):
            //while (have_posts()): the_post();

            //the_title(); 

            //endwhile;
            //endif;

            $myarguments = array(
                'post_type' => 'student',
            );
            $the_query = new WP_Query($myarguments);
            while ($the_query->have_posts()) {
                $the_query->the_post();
                the_post_thumbnail();
                the_title();
                the_content();
            }

            ?>
            <!-- <div class="carousel-item active">
                        <div class="container">
                            <div class="col-lg-10 col-md-11 mx-auto">
                                <div class="detail-box">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class="">
                                            <a href="">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="col-lg-10 col-md-11 mx-auto">
                                <div class="detail-box">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class="">
                                            <a href="">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="col-lg-10 col-md-11 mx-auto">
                                <div class="detail-box">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class="">
                                            <a href="">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="col-lg-10 col-md-11 mx-auto">
                                <div class="detail-box">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class="">
                                            <a href="">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="col-lg-10 col-md-11 mx-auto">
                                <div class="detail-box">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class="">
                                            <a href="">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
    </div>
</section>