<?php $this->load->view('frontend/layout/header'); ?>



    <!-- Banner start -->

    <section class="swiper-banner">

        <div class="slider">

            <div class="swiper-container">

                <div class="swiper-wrapper">

                    <div class="swiper-slide" style="background-image:url(<?=base_url();?>assets/frontend/images/slider/slider7.jpg)">

                        <div class="swiper-content" data-animation="animated fadeInDown">

                            <h2>Book a ticket & Just Leave</h2>

                            <h1>Search your next destination</h1>

                            <a href="tour-detail.html" class="btn-blue btn-red">View Our Tour</a>

                        </div>

                    </div>

                    <div class="swiper-slide" style="background-image:url(<?=base_url();?>assets/frontend/images/slider/slider2.jpg)">

                        <div class="swiper-content" data-animation="animated fadeInRight">

                            <h2>Cost friendly packages on your way</h2>

                            <h1>We offer you better deals</h1>

                            <a href="tour-detail.html" class="btn-blue btn-red">View Our Tour</a>

                        </div>

                    </div>

                    <div class="swiper-slide" style="background-image:url(<?=base_url();?>assets/frontend/images/slider/slider3.jpg)">

                        <div class="swiper-content" data-animation="animated fadeInUp">

                            <h2>exciting schemes just a click away</h2>

                            <h1>Amazing Santorini 7 days tour</h1>

                            <a href="tour-detail.html" class="btn-blue btn-red">View Our Tour</a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Add Arrows -->

            <div class="swiper-button-next"></div>

            <div class="swiper-button-prev"></div>

            <div class="overlay"></div>

        </div>

    </section>

    <!-- Banner Ends -->





    <!-- Search Box -->

    <div class="search-box clearfix">

        <div class="container">

            <div class="search-outer">

                <div class="search-content">

                    <form>

                        <div class="row">

                            <div class="col-md-3 col-xs-6">

                                <div class="search-ad">

                                    <p>Find Your <span>Holiday</span></p>

                                    <i class="flaticon-sun-umbrella "></i>

                                </div>

                            </div>

                            <div class="col-md-3 col-xs-6">

                                <div class="table_item">

                                    <div class="form-group">

                                        <select id="custom-select-1" class="selectpicker form-control">

                                          <option value="0">Destination</option>

                                            <option value="1">0</option>

                                            <option value="2">1</option>

                                            <option value="3">2</option>

                                            <option value="4">3</option>

                                            <option value="5">4</option>

                                        </select>



                                        <i class="flaticon-maps-and-flags"></i>

                                    </div>

                                    <div class="form-group  form-icon">

                                        <select name="custom-select-2" class="selectpicker form-control" tabindex="1">

                                            <option value="0">Type</option>

                                            <option value="1">0</option>

                                            <option value="2">1</option>

                                            <option value="3">2</option>

                                            <option value="4">3</option>

                                            <option value="5">4</option>

                                        </select>

                                        <i class="flaticon-box"></i>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-3 col-xs-6">

                                <div class="table_item">

                                    <div class="form-group">

                                        <div class='input-group date' id='datetimepicker1'>

                                            <input type='text' class="form-control" value="dd-mm-yyyy" />

                                            <i class="flaticon-calendar"></i>

                                            <span class="input-group-addon">

                                                <i class="fa fa-calendar" aria-hidden="true"></i>

                                            </span>

                                        </div>

                                    </div>

                                    <div class="form-group form-icon">

                                        <div class='input-group date' id='datetimepicker2'>

                                            <input type='text' class="form-control" value="dd-mm-yyyy" />

                                            <i class="flaticon-calendar"></i>

                                            <span class="input-group-addon">

                                                <i class="fa fa-calendar" aria-hidden="true"></i>

                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-3 col-xs-6">

                                <div class="table_item table-item-slider">

                                    <div class="range-slider">

                                        <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">

                                            <span class="min-value">0 $</span> 

                                            <span class="max-value">2000 $</span>

                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>

                                        </div>

                                        <div class="clearfix"></div>

                                    </div>

                                    <div class="search">

                                        <a href="#" class="btn-blue btn-red">SEARCH</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </form> 

                </div>

            </div>

        </div>

    </div>

    <!-- Search Box Ends -->



    <!-- Popular Packages --> 

    <section class="popular-packages">

        <div class="container">

            <div class="section-title text-center">

                <h2>Popular Packages</h2>

                <div class="section-icon">

                    <i class="flaticon-diamond"></i>

                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>

            </div>

            <div class="row package-slider slider-button">

                <div class="col-sm-4">

                    <div class="package-item">

                        <div class="package-image">

                            <img src="<?=base_url();?>assets/frontend/images/package1.jpg" alt="Image">

                            <div class="package-price">

                                <div class="deal-rating">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star-o"></span>

                                    <span class="fa fa-star-o"></span>

                                </div>

                                <p><span>$659</span> / PER </p>

                            </div>

                        </div>

                        <div class="package-content">

                            <h3>Surfing at Goa, India</h3>

                            <p class="package-days"><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                            <div class="package-info">

                                <a href="tour-detail.html" class="btn-blue btn-red">View more details</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="package-item">

                        <div class="package-image">

                            <img src="<?=base_url();?>assets/frontend/images/package2.jpg" alt="Image">

                            <div class="package-price">

                                <div class="deal-rating">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star-o"></span>

                                    <span class="fa fa-star-o"></span>

                                </div>

                                <p><span>$659</span> / PER </p>

                            </div>

                        </div>

                        <div class="package-content">

                            <h3>Hot Air Ballooning</h3>

                            <p class="package-days"><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                            <div class="package-info">

                                <a href="tour-detail.html" class="btn-blue btn-red">View more details</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="package-item">

                        <div class="package-image">

                            <img src="<?=base_url();?>assets/frontend/images/package3.jpg" alt="Image">

                            <div class="package-price">

                                <div class="deal-rating">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star-o"></span>

                                    <span class="fa fa-star-o"></span>

                                </div>

                                <p><span>$659</span> / PER </p>

                            </div>

                        </div>

                        <div class="package-content">

                            <h3>Lake Tohoe Advanture</h3>

                            <p class="package-days"><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                            <div class="package-info">

                                <a href="tour-detail.html" class="btn-blue btn-red">View more details</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="package-item">

                        <div class="package-image">

                            <img src="<?=base_url();?>assets/frontend/images/package1.jpg" alt="Image">

                            <div class="package-price">

                                <div class="deal-rating">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star-o"></span>

                                    <span class="fa fa-star-o"></span>

                                </div>

                                <p><span>$659</span> / PER </p>

                            </div>

                        </div>

                        <div class="package-content">

                            <h3>Surfing at Goa, India</h3>

                            <p class="package-days"><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                            <div class="package-info">

                                <a href="tour-detail.html" class="btn-blue btn-red">View more details</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="package-item">

                        <div class="package-image">

                            <img src="<?=base_url();?>assets/frontend/images/package2.jpg" alt="Image">

                            <div class="package-price">

                                <div class="deal-rating">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star-o"></span>

                                    <span class="fa fa-star-o"></span>

                                </div>

                                <p><span>$659</span> / PER </p>

                            </div>

                        </div>

                        <div class="package-content">

                            <h3>Hot Air Ballooning</h3>

                            <p class="package-days"><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                            <div class="package-info">

                                <a href="tour-detail.html" class="btn-blue btn-red">View more details</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="package-item">

                        <div class="package-image">

                            <img src="<?=base_url();?>assets/frontend/images/package3.jpg" alt="Image">

                            <div class="package-price">

                                <div class="deal-rating">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star-o"></span>

                                    <span class="fa fa-star-o"></span>

                                </div>

                                <p><span>$659</span> / PER </p>

                            </div>

                        </div>

                        <div class="package-content">

                            <h3>Lake Tohoe Adventure</h3>

                            <p class="package-days"><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                            <div class="package-info">

                                <a href="tour-detail.html" class="btn-blue btn-red">View more details</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Popular Packages Ends -->



    <!-- Deals -->

    <section class="deals">

        <div class="container">

            <div class="section-title section-title-white text-center">

                <h2>Last Minute Deals</h2>

                <div class="section-icon">

                    <i class="flaticon-diamond"></i>

                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>

            </div>

            <div class="deals-outer">

                <div class="row deals-slider slider-button">

                    <div class="col-md-3">

                        <div class="deals-item">

                            <div class="deals-item-outer">

                                <div class="deals-image">

                                    <img src="<?=base_url();?>assets/frontend/images/deal1.jpg" alt="Image">

                                    <span class="deal-price">$8600</span>

                                </div>

                                <div class="deal-content">

                                    <div class="deal-rating">

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star-o"></span>

                                        <span class="fa fa-star-o"></span>

                                    </div>

                                    <h3>Paris and Bordeaus</h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="deals-item">

                            <div class="deals-item-outer">

                                <div class="deals-image">

                                    <img src="<?=base_url();?>assets/frontend/images/deal2.jpg" alt="Image">

                                    <span class="deal-price">$8600</span>

                                </div>

                                <div class="deal-content">

                                    <div class="deal-rating">

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star-o"></span>

                                        <span class="fa fa-star-o"></span>

                                    </div>

                                    <h3>Paris and Bordeaus</h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="deals-item">

                            <div class="deals-item-outer">

                                <div class="deals-image">

                                    <img src="<?=base_url();?>assets/frontend/images/deal3.jpg" alt="Image">

                                    <span class="deal-price">$8600</span>

                                </div>

                                <div class="deal-content">

                                    <div class="deal-rating">

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star-o"></span>

                                        <span class="fa fa-star-o"></span>

                                    </div>

                                    <h3>Paris and Bordeaus</h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="deals-item">

                            <div class="deals-item-outer">

                                <div class="deals-image">

                                    <img src="<?=base_url();?>assets/frontend/images/deal4.jpg" alt="Image">

                                    <span class="deal-price">$8600</span>

                                </div>

                                <div class="deal-content">

                                    <div class="deal-rating">

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star-o"></span>

                                        <span class="fa fa-star-o"></span>

                                    </div>

                                    <h3>Paris and Bordeaus</h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="deals-item">

                            <div class="deals-item-outer">

                                <div class="deals-image">

                                    <img src="<?=base_url();?>assets/frontend/images/deal2.jpg" alt="Image">

                                    <span class="deal-price">$8600</span>

                                </div>

                                <div class="deal-content">

                                    <div class="deal-rating">

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star-o"></span>

                                        <span class="fa fa-star-o"></span>

                                    </div>

                                    <h3>Paris and Bordeaus</h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="deals-item">

                            <div class="deals-item-outer">

                                <div class="deals-image">

                                    <img src="<?=base_url();?>assets/frontend/images/deal1.jpg" alt="Image">

                                    <span class="deal-price">$8600</span>

                                </div>

                                <div class="deal-content">

                                    <div class="deal-rating">

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star-o"></span>

                                        <span class="fa fa-star-o"></span>

                                    </div>

                                    <h3>Paris and Bordeaus</h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="deals-item">

                            <div class="deals-item-outer">

                                <div class="deals-image">

                                    <img src="<?=base_url();?>assets/frontend/images/deal4.jpg" alt="Image">

                                    <span class="deal-price">$8600</span>

                                </div>

                                <div class="deal-content">

                                    <div class="deal-rating">

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star-o"></span>

                                        <span class="fa fa-star-o"></span>

                                    </div>

                                    <h3>Paris and Bordeaus</h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="deals-item">

                            <div class="deals-item-outer">

                                <div class="deals-image">

                                    <img src="<?=base_url();?>assets/frontend/images/deal3.jpg" alt="Image">

                                    <span class="deal-price">$8600</span>

                                </div>

                                <div class="deal-content">

                                    <div class="deal-rating">

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star checked"></span>

                                        <span class="fa fa-star-o"></span>

                                        <span class="fa fa-star-o"></span>

                                    </div>

                                    <h3>Paris and Bordeaus</h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>

                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="section-overlay"></div>

    </section>

    <!-- Deals Ends -->



    <!--* bucket*-->

    <section id="bucket-list" class="bucket-list">



        <div class="bucket-icons">

            <div class="container">   

                <div class="section-title text-center">

                    <h2>Top up your Bucket List</h2>

                    <div class="section-icon">

                        <i class="flaticon-diamond"></i>

                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>

                </div>



                <div class="row">

                    <div class="col-xs-12">

                        <div class="mt_filter">

                            <ul class="list-inline text-center filter">

                                <li class="active"><a href="#" data-filter=".cycling"><i class="flaticon-bicycle"></i><span>CYCLING</span></a></li>

                                <li><a href="#" data-filter=".sailing"><i class="flaticon-sailboat"></i><span>SAILING</span></a></li>

                                <li><a href="#" data-filter=".wildlife"><i class="flaticon-wolf"></i><span>WILDLIFE</span></a></li>

                                <li><a href="#" data-filter=".family"><i class="flaticon-family"></i><span>FAMILY</span></a></li>             

                                <li><a href="#" data-filter=". "><i class="flaticon-man-in-hike"></i><span>HIKING</span></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>   



        <div class="bucket-content">

            <div class="container">

                <div class="row isotopeContainer">

                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector cycling wildlife family hiking">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket1.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector cycling family hiking">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket5.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector family hiking">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket3.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector wildlife family hiking">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket2.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector sailing wildlife family hiking">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket4.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>



                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector sailing wildlife family hiking">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket5.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>



                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector family hiking">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket4.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>



                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector family hiking">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket5.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>



                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector sailing wildlife family hiking">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket1.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>



                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector  wildlife family">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket5.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>



                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector wildlife family">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket1.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>



                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector sailing wildlife family hiking">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket6.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>



                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector cycling sailing">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket5.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>



                    <div class="col-sm-6 col-xs-12 no-padding isotopeSelector cycling sailing">

                        <div class="hovereffect-bucket bucket-item">

                            <div class="bucket-image"><img src="<?=base_url();?>assets/frontend/images/bucket1.jpg" alt="image" class="img-responsive" /></div>

                            <div class="bucket-item-content">

                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>

                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>

                            </div>

                        </div>

                    </div>



                </div>

                <div class="section-overlay"></div>

            </div>

        </div>

    </section>

    <!--* End bucket*-->



    <!-- Top Destinations -->

    <section class="top-destinations">

        <div class="container">

            <div class="section-title text-center">

                <h2>Top Destinations</h2>

                <div class="section-icon">

                    <i class="flaticon-diamond"></i>

                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>

            </div>

            <div class="row">

                <div class="col-md-4 col-xs-4">

                    <div class="top-destination-item">

                        <img class="img-responsive" src="<?=base_url();?>assets/frontend/images/deal1.jpg" alt="Image">

                        <div class="overlay">

                            <h2><a href="tour-detail.html">Bahamas</a></h2>

                            <p>Plan Your Tour to Bahamas With Us.</p>

                        </div>

                    </div>

                    <div class="top-destination-item">

                        <img class="img-responsive" src="<?=base_url();?>assets/frontend/images/deal2.jpg" alt="Image">

                        <div class="overlay">

                            <h2><a href="tour-detail.html">Italy</a></h2>

                            <p>Plan Your Tour to Bahamas With Us.</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4 col-xs-4">

                    <div class="top-destination-item destination-margin">

                        <img class="img-responsive" src="<?=base_url();?>assets/frontend/images/deal5.jpg" alt="Image">

                        <div class="overlay overlay-full">

                            <h2><a href="tour-detail.html">Egypt</a></h2>

                            <p>Plan Your Tour to Bahamas With Us.</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4 col-xs-4">

                    <div class="top-destination-item">

                        <img class="img-responsive" src="<?=base_url();?>assets/frontend/images/deal3.jpg" alt="Image">

                        <div class="overlay">

                            <h2><a href="tour-detail.html">Nepal</a></h2>

                            <p>Plan Your Tour to Bahamas With Us.</p>

                        </div>

                    </div>

                    <div class="top-destination-item">

                        <img class="img-responsive" src="<?=base_url();?>assets/frontend/images/deal4.jpg" alt="Image">

                        <div class="overlay">

                            <h2><a href="tour-detail.html">Thailand</a></h2>

                            <p>Plan Your Tour to Bahamas With Us.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Top Destination Ends -->



    <!-- Trip Ad -->

    <section class="trip-ad">

        <div class="container">

            <div class="row">

                <div class="col-md-6 col-xs-12">

                    

                    <div class="trip-ad-content">

                        <div class="ad-title">

                            <h2>Explore The <span>Thailand Trip</span></h2>

                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismody tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adi minim veniam, qu nostrud exerci tation dolore magna aliquam erat volutpat.</p>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismody tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adi minim veniam, qu nostrud exerci tation dolore magna aliquam erat volutpat.</p>

                        <div class="trip-ad-btn">

                            <a href="tour-detail.html" class="btn-blue btn-red">BOOK NOW</a>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xs-12">

                    <div class="ad-price">

                        <div class="ad-price-inner">

                            <span>Starting at <span class="rate">$300</span></span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Trip Ad Ends -->



    <!-- Deals On Sale -->

    <section class="deals-on-sale">

        <div class="container">

            <div class="section-title text-center">

                <h2>Deals On Sale</h2>

                <div class="section-icon">

                    <i class="flaticon-diamond"></i>

                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>

            </div>

            <div class="row sale-slider slider-button">

                <div class="col-md-12">

                    <div class="sale-item">

                        <div class="sale-image">

                            <img src="<?=base_url();?>assets/frontend/images/sale1.jpg" alt="Image">

                        </div>

                        <div class="sale-content">

                            <div class="sale-review">

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                            </div>

                            <h3><a href="#">Surfing at Bahamas</a></h3>

                            <p><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>

                        </div>

                        <div class="sale-tag">

                            <span class="old-price">$1449</span>

                            <span class="new-price"> $900</span>

                        </div>

                        <div class="sale-overlay"></div>

                    </div>

                </div>

                <div class="col-md-12">

                    <div class="sale-item">

                        <div class="sale-image">

                            <img src="<?=base_url();?>assets/frontend/images/sale2.jpg" alt="Image">

                        </div>

                        <div class="sale-content">

                            <div class="sale-review">

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                            </div>

                            <h3><a href="#">Surfing at Bahamas</a></h3>

                            <p><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>

                        </div>

                        <div class="sale-tag">

                            <span class="old-price">$1449</span>

                            <span class="new-price"> $900</span>

                        </div>

                        <div class="sale-overlay"></div>

                    </div>

                </div>

                <div class="col-md-12">

                    <div class="sale-item">

                        <div class="sale-image">

                            <img src="<?=base_url();?>assets/frontend/images/sale3.jpg" alt="Image">

                        </div>

                        <div class="sale-content">

                            <div class="sale-review">

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                            </div>

                            <h3><a href="#">Surfing at Bahamas</a></h3>

                            <p><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>

                        </div>

                        <div class="sale-tag">

                            <span class="old-price">$1449</span>

                            <span class="new-price"> $900</span>

                        </div>

                        <div class="sale-overlay"></div>

                    </div>

                </div>

                <div class="col-md-12">

                    <div class="sale-item">

                        <div class="sale-image">

                            <img src="<?=base_url();?>assets/frontend/images/sale4.jpg" alt="Image">

                        </div>

                        <div class="sale-content">

                            <div class="sale-review">

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                            </div>

                            <h3><a href="#">Surfing at Bahamas</a></h3>

                            <p><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>

                        </div>

                        <div class="sale-tag">

                            <span class="old-price">$1449</span>

                            <span class="new-price"> $900</span>

                        </div>

                        <div class="sale-overlay"></div>

                    </div>

                </div>

                <div class="col-md-12">

                    <div class="sale-item">

                        <div class="sale-image">

                            <img src="<?=base_url();?>assets/frontend/images/sale1.jpg" alt="Image">

                        </div>

                        <div class="sale-content">

                            <div class="sale-review">

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                            </div>

                            <h3><a href="#">Surfing at Bahamas</a></h3>

                            <p><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>

                        </div>

                        <div class="sale-tag">

                            <span class="old-price">$1449</span>

                            <span class="new-price"> $900</span>

                        </div>

                        <div class="sale-overlay"></div>

                    </div>

                </div>

                <div class="col-md-12">

                    <div class="sale-item">

                        <div class="sale-image">

                            <img src="<?=base_url();?>assets/frontend/images/sale3.jpg" alt="Image">

                        </div>

                        <div class="sale-content">

                            <div class="sale-review">

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                            </div>

                            <h3><a href="#">Surfing at Bahamas</a></h3>

                            <p><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>

                        </div>

                        <div class="sale-tag">

                            <span class="old-price">$1449</span>

                            <span class="new-price"> $900</span>

                        </div>

                        <div class="sale-overlay"></div>

                    </div>

                </div>

                <div class="col-md-12">

                    <div class="sale-item">

                        <div class="sale-image">

                            <img src="<?=base_url();?>assets/frontend/images/sale2.jpg" alt="Image">

                        </div>

                        <div class="sale-content">

                            <div class="sale-review">

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                                <span class="fa fa-star checked"></span>

                            </div>

                            <h3><a href="#">Surfing at Bahamas</a></h3>

                            <p><i class="flaticon-time"></i> 5 days</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>

                        </div>

                        <div class="sale-tag">

                            <span class="old-price">$1449</span>

                            <span class="new-price"> $900</span>

                        </div>

                        <div class="sale-overlay"></div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Deals On Sale Ends -->



    <!-- Testimonials -->

    <section class="testimonials">

        <div class="section-title text-center">

            <h2>Best Rated Travel Agency</h2>

            <div class="section-icon section-icon-white">

                <i class="flaticon-diamond"></i>

            </div>       

        </div>

        <!-- Paradise Slider -->

        <div id="testimonial_094" class="carousel slide testimonial_094_indicators thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="3000" data-duration="1000">





            <!-- Indicators -->

            <ol class="carousel-indicators">

                <li data-target="#testimonial_094" data-slide-to="0" class="active">

                    <img src="<?=base_url();?>assets/frontend/images/testemonial1.jpg" alt="testimonial_094_01"> <!-- 1st Image -->

                </li>

                <li data-target="#testimonial_094" data-slide-to="1">

                    <img src="<?=base_url();?>assets/frontend/images/testemonial2.jpg" alt="testimonial_094_02"> <!-- 2nd Image -->

                </li>

                <li data-target="#testimonial_094" data-slide-to="2">

                    <img src="<?=base_url();?>assets/frontend/images/testemonial3.jpg" alt="testimonial_094_03"> <!-- 3rd Image -->

                </li>

                <li data-target="#testimonial_094" data-slide-to="3">

                    <img src="<?=base_url();?>assets/frontend/images/testemonial4.jpg" alt="testimonial_094_04"> <!-- 4th Image -->

                </li>

                <li data-target="#testimonial_094" data-slide-to="4">

                    <img src="<?=base_url();?>assets/frontend/images/testemonial5.jpg" alt="testimonial_094_05"> <!-- 5th Image -->

                </li>

            </ol>



            <!-- Wrapper For Slides -->

            <div class="carousel-inner" role="listbox">



                <!-- First Slide -->

                <div class="item active">

                    <!-- Text Layer -->

                    <div class="testimonial_094_slide">

                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>

                        <div class="deal-rating">

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star-o"></span>

                            <span class="fa fa-star-o"></span>

                        </div>

                        <h5><a href="#">Susan Doe, Houston</a></h5>

                    </div> <!-- /Text Layer -->

                </div> <!-- /item -->

                <!-- End of First Slide -->



                <!-- Second Slide -->

                <div class="item">

                    <!-- Text Layer -->

                    <div class="testimonial_094_slide">

                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>

                        <div class="deal-rating">

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star-o"></span>

                            <span class="fa fa-star-o"></span>

                        </div>

                        <h5><a href="#">Susan Doe, Houston</a></h5>

                    </div> <!-- /Text Layer -->

                </div> <!-- /item -->

                <!-- End of Second Slide -->



                <!-- Third Slide -->

                <div class="item">

                    <!-- Text Layer -->

                    <div class="testimonial_094_slide">

                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>

                        <div class="deal-rating">

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star-o"></span>

                            <span class="fa fa-star-o"></span>

                        </div>

                        <h5><a href="#">Susan Doe, Houston</a></h5>

                    </div> <!-- /Text Layer -->

                </div> <!-- /item -->

                <!-- End of Third Slide -->



                <!-- Fourth Slide -->

                <div class="item">

                    <!-- Text Layer -->

                    <div class="testimonial_094_slide">

                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>

                        <div class="deal-rating">

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star-o"></span>

                            <span class="fa fa-star-o"></span>

                        </div>

                        <h5><a href="#">Susan Doe, Houston</a></h5>

                    </div> <!-- /Text Layer -->

                </div> <!-- /item -->

                <!-- End of Fourth Slide -->



                <!-- Fifth Slide -->

                <div class="item">

                    <!-- Text Layer -->

                    <div class="testimonial_094_slide">

                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>

                        <div class="deal-rating">

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star checked"></span>

                            <span class="fa fa-star-o"></span>

                            <span class="fa fa-star-o"></span>

                        </div>

                        <h5><a href="#">Susan Doe, Houston</a></h5>

                    </div> <!-- /Text Layer -->

                </div> <!-- /item -->

                <!-- End of Fifth Slide -->

            </div> <!-- End of Wrapper For Slides -->

        </div> <!-- End Paradise Slider -->

    </section>

    <!-- Testimonials -->



    <!-- Countdown -->

    <section class="countdown-section">

        <div class="container">

            <div class="countdown-title">

                <h2>Special Tour in May, Discover <span>Thailand</span> for 50 Customers with <span>Discount 30%</span></h2>

                <p>It’s limited seating! Hurry up</p>

            </div>

            <div class="countdown countdown-container container">

                <p id="demo"></p>

            </div><!-- /.countdown-wrapper -->

        </div>

        <div class="testimonial-overlay"></div>

    </section>

    <!-- Countdown Ends -->



    <!-- Blog -->

    <section class="blog">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="section-title text-center">

                        <h2>Our Blog</h2>

                        <div class="section-icon">

                            <i class="flaticon-diamond"></i>

                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>

                    </div>

                </div>

                <div class="col-md-4 col-sm-12">

                    <div class="blog-item">

                        <div class="blog-image">

                            <img src="<?=base_url();?>assets/frontend/images/blog1.jpg" alt="Image">

                        </div>

                        <div class="blog-content">

                            <div class="blog-date"><p><i class="fa fa-clock-o"></i> Posted On : 12 May</p></div>

                            <h3><a href="blog-detail.html">What happened during my first trip alone</a></h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>

                            <div class="blog-author">

                                <div class="pull-left">

                                    <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Jack Richard</a></p>

                                </div>

                                <div class="pull-right blog-date-icon">

                                    <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>

                                    <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>

                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">

                    <div class="blog-item">

                        <div class="blog-image">

                            <img src="<?=base_url();?>assets/frontend/images/blog2.jpg" alt="Image">

                        </div>

                        <div class="blog-content">

                            <div class="blog-date"><p><i class="fa fa-clock-o"></i> Posted On : 12 May</p></div>

                            <h3><a href="blog-detail.html">remembering the road i went through</a></h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>

                            <div class="blog-author">

                                <div class="pull-left">

                                    <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Jack Richard</a></p>

                                </div>

                                <div class="pull-right blog-date-icon">

                                    <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>

                                    <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>

                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">

                    <div class="blog-item">

                        <div class="blog-image">

                            <img src="<?=base_url();?>assets/frontend/images/blog3.jpg" alt="Image">

                        </div>

                        <div class="blog-content">

                            <div class="blog-date"><p><i class="fa fa-clock-o"></i> Posted On : 12 May</p></div>

                            <h3><a href="blog-detail.html">planning fot the perfect familytrip outdoor</a></h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>

                            <div class="blog-author">

                                <div class="pull-left">

                                    <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Jack Richard</a></p>

                                </div>

                                <div class="pull-right blog-date-icon">

                                    <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>

                                    <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>

                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Blog Ends -->



    <!-- Trusted Partners -->

    <section class="trusted-partners">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-xs-4">

                    <div class="partners-title">

                        <h3>Our <span>Partners</span></h3>

                    </div>

                </div>

                <div class="col-md-9 col-xs-8">

                    <ul class="partners-logo partners-slider">

                        <li><a href="#"><img src="<?=base_url();?>assets/frontend/images/partner1.png" alt="Image"></a></li>

                        <li><a href="#"><img src="<?=base_url();?>assets/frontend/images/partner2.png" alt="Image"></a></li>

                        <li><a href="#"><img src="<?=base_url();?>assets/frontend/images/partner3.png" alt="Image"></a></li>

                        <li><a href="#"><img src="<?=base_url();?>assets/frontend/images/partner4.png" alt="Image"></a></li>

                        <li><a href="#"><img src="<?=base_url();?>assets/frontend/images/partner5.png" alt="Image"></a></li>

                        <li><a href="#"><img src="<?=base_url();?>assets/frontend/images/partner6.png" alt="Image"></a></li>

                        <li><a href="#"><img src="<?=base_url();?>assets/frontend/images/partner1.png" alt="Image"></a></li>

                        <li><a href="#"><img src="<?=base_url();?>assets/frontend/images/partner2.png" alt="Image"></a></li>

                        <li><a href="#"><img src="<?=base_url();?>assets/frontend/images/partner3.png" alt="Image"></a></li>

                        <li><a href="#"><img src="<?=base_url();?>assets/frontend/images/partner4.png" alt="Image"></a></li>

                        <li><a href="#"><img src="<?=base_url();?>assets/frontend/images/partner5.png" alt="Image"></a></li>

                        <li><a href="#"><img src="<?=base_url();?>assets/frontend/images/partner6.png" alt="Image"></a></li>

                    </ul>

                </div>

            </div>

        </div>

    </section>

    <!-- Trusted Partners Ends -->



<?php $this->load->view('frontend/layout/footer'); ?>

