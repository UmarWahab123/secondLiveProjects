<?php $this->load->view('include/header', $title ); ?>

<?php include 'include/searching_popup.php'; ?>

<!-- SEARCH -->

<!-- search tours form-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">



<div id="search_form">

  <div class="container ">

     

    <div class="row">

      <div class="col-md-4 flight_search">

        <form class="form" method="GET" id="flightSearchForm" autocomplete="off" action="<?php echo base_url();?>Searchflights/search" >

          

          <input type="hidden" id="trip_type" name="trip_type" value="RoundT">



          <div class="flightSearchForm">

            <div class="row">

              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="margin-bottom:1.25rem">

                <li class="nav-item active text-center">

                  <a class="nav-link " id="roundwayID" data-toggle="pill" href="#flight-search-form" role="tab" aria-controls="flight-search-form" aria-selected="true">Round Trip</a>

                </li>

                <li class="nav-item text-center">

                  <a class="nav-link" id="onewayID" data-toggle="pill" href="#flight-search-form" role="tab" aria-controls="flight-search-form" aria-selected="false">One Way</a>

                </li>

              </ul>

              

              <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade active in" id="flight-search-form" role="tabpanel">

                  <div class="input-group form-group">

                    <input name="deptCity" id="dept_city"  onkeypress="return /[a-z]/i.test(event.key)" spellcheck="false" type="text" placeholder="From: country, city or airport" autocomplete="disabled" required class="form-control form-group"  style=" margin-bottom: 3px;  height: 56px !important;

    font-size: 1rem !important;">

                  </div>

                  <span id="deptcity_error" class="form_error errorClass">Select Departure Airport.</span>

                  <input type="hidden" id="dept_city_hidden" name="deptCityHidden">

                  <div class="input-group form-group">

                    <input name="destinyCity" id="destiny_city"  onkeypress="return /[a-z]/i.test(event.key)"  spellcheck="false"  type="text" placeholder="To: country, city or airport" autocomplete="disabled" required class="form-control form-group" style="margin-bottom: 3px;  height: 56px !important;

    font-size: 1rem !important;">

                  </div>

                  <span id="destinycity_error"  class="form_error errorClass">Select Destination Airport.</span>

                  <input type="hidden" name="destinyCityHidden" id="destiny_city_hidden">

                  

                  <div class="row" style=" height: 56px !important;

    font-size: 1rem !important;"> 

                    <div class="col-lg-12 p-0 fix_input_type" id="Oneway_Departuredatebox">

                      <div class="tours-calendar input-group form-group" >

                        <input name="departuredate_OneW" id="oneway_arrival" onfocus="myFunctionNo(this)" placeholder="Departure Date" required  type="text" class="form-control oneway_arrival" style="

    height: 56px !important;

    font-size: 1rem !important;

">

                      </div>

                      <span id="OnewayDeparturedatebox_error"  class="form_error errorClass">Select Departure Date</span>

                    </div>

                    <div class="col-lg-6 p-0 fix_input_type p_r_12" id="Departdatebox">

                      <div class="input-group form-group">

                        <input name="departuredate_RoundW" id="dept_date_input" required placeholder="Departure Date" value="" type="text" class="form-control dept_date_input" onfocus="myFunctionNo(this)" style="

    height: 56px !important;

    font-size: 1rem !important;

">

                      </div>

                      <span id="deptdate_error"  class="form_error errorClass">Select Departure Date</span>

                    </div>

                    <div class="col-lg-6 p-0 fix_input_type p_l_12" id="Returndatebox">

                      <div class="input-group form-group">

                        <input name="returndate_RoundW" id="arrival_date_input" placeholder="Return Date" required value="" type="text" class="form-control arrival_date_input" style="

    height: 56px !important;

    font-size: 1rem !important;

">

                        

                      </div>

                      <span id="arrivaldate_error"  class="form_error errorClass">Select Arrival Date</span>

                    </div>

                  </div>

                  <div class="row">

                    <div class="col-lg-6 p-0 fix_input_type p_r_12" id="passengers_dropdown" style="margin-bottom: 12px;">

                      <div class="btn-group passendgerdiv" style="width: 100% !important;">

                        <button class="btn btn-default text-left dropdown-toggle travellers_buton"  data-toggle="dropdown" type="button" style="width: 100% !important; height: 56px;  height: 56px !important;

    font-size: 1rem !important; "><span id="count_passengers">(1)</span> Passengers 

                          <span class="icofont-simple-down pull-right" style="font-size: 15px;padding-top: 4px; "></span></button>

                          <ul class="dropdown-menu" >

                            <label>Passengers:</label>

                            <div class="table-responsive">

                              <table class="table passengers_tbl">

                                <tr>

                                  <th>Adults(12+):</th>

                                  <td>

                                    <li>

                                      <div class="btn-group" >

                                        <input type="button" class="btn btn-primary pull-left" id="adult_minus" value="-" >

                                        <input type="text" name="Adults" readonly class="form-control pull-left text-center passenger_input_readonly" value="1" id="Adults" >

                                        <input type="button" id="adult_plus" class="btn btn-primary pull-left" value="+" >

                                      </div>

                                    </li>

                                  </td>

                                </tr>

                                <tr>

                                  <th >Children(2-12): </th>

                                  <td >

                                    <li>

                                      <div class="btn-group" >

                                        <input type="button" class="btn btn-primary pull-left" id="children_minus" value="-" >

                                        <input type="text" readonly name="Children" class="form-control pull-left text-center passenger_input_readonly" value="0" id="Children" >

                                        <input type="button" id="children_plus" class="btn btn-primary pull-left" value="+" >

                                      </div>

                                    </li>

                                  </td>

                                </tr>

                                <tr>

                                  <th >Infants(0-2): </th>

                                  <td >

                                    <li>

                                      <div class="btn-group">

                                        <input type="button" class="btn btn-primary pull-left" id="infants_minus" value="-" >

                                        <input readonly  type="text" name="Infant" class="form-control pull-left text-center passenger_input_readonly" value="0" id="Infant" >

                                        <input type="button" id="infants_plus" class="btn btn-primary pull-left" value="+" >

                                      </div>

                                    </li>

                                  </td>

                                </tr>

                              </table>

                            </div>

                          </ul>

                      </div>

                    </div>



                    <div class="col-lg-6 p-0 fix_input_type p_l_12" id="passengers_dropdown" style="margin-bottom: 12px; ">

                      <div class="btn-group" style="width: 100% !important;" >

                        <button type="button" class="btn btn-default dropdown-toggle cabin_cls_buton" style="width: 100% !important;border-radius: 0 5px 5px 0; margin-bottom: 3px; height: 56px !important;

    font-size: 1rem !important;" >Economy </button>

                        <ul class="dropdown-menu cabin_cls_menu " role="menu">

                          <label>Cabin Class:</label>

                          <select name="class_type" id="class" title="Class" class="form-control class_type" style="height: 35px;border-radius: 5px !important;padding-left: 10px; ">

                            <option value="Economy"  >Economy </option>

                            <option value="Premium"  >Premium </option>

                            <option value="Business" >Business </option>

                          </select>

                        </ul>

                      </div>

                    </div>



                    </div>

                  <div class="row" style="margin-bottom: 0.5rem; ">

                    <div class="col-lg-12 p-0 fix_input_type" id="class-mb">

                      <div class="input-group form-group">

                        <input name="phoneNumber" id="phoneNumber" placeholder="Valid Phone Number" type="text" onkeypress="return isNumeric(event)" minlength="11" maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" min="0" pattern="[0-9]*" required class="form-control" style="display:none;  height: 56px !important;

    font-size: 1rem !important;"><br>

                      </div>

                      <span id="phone_error" class="form_error errorClassPhone">Enter Valid Phone Number.</span>

  <div class="promotional hide" style="margin-top: -3px">  <b>For promotional purposes</b></div>





                    </div>

                    

                    <?php

                    $number_str = '123456789';

                    $session_key = substr(str_shuffle($number_str), 0, 5);

                    ?>

                    

                    <input type="hidden" name="session_key" value="<?php echo $session_key; ?>">

                    <input type="hidden" id="buseragent" name="buseragent">

                    <input type="hidden" id="ipcilent" name="ipcilent">

                    <input type="hidden" id="fooSessionid" name="fooSessionid">

                    <div class="col-lg-12 p-0 fix_input_type">

                      <button class="btn btn-danger btn-block search-btn enquiry-fbtn" type="submit" style="font-size: 1.2rem; background: transparent linear-gradient(257deg,#f79c34 0,#ff6c1d 100%) 0 0 no-repeat padding-box; height: 56px;" ><b>SEARCH FLIGHTS</b></button>

                    </div>

                  </div>

                </div>

                

              </div>

          </div>

          </div>

        </form>



        <div class="row">

          <ul class="fix_ul">

            <li><img src="<?php echo base_url(); ?>assets/images/tick-navigation.svg" alt="">TRUSTED CHOICE</li>

            <li><img src="<?php echo base_url(); ?>assets/images/tick-navigation.svg" alt="">SECURE BOOKING</li>

          </ul>

        </div>

      </div>

      <div class="col-md-8 col-sm-12 hidden-xs" id="owl_top" >

        

        <div class="hero__content-alt">

          <span class="hero__customers"> <i class="fa fa-heart" style="color:red"></i>  Over&nbsp;<strong>thousands of<strong>&nbsp;happy customers</span>

          <h1 class="hero__title">

          <span>Search &amp; Book Flights</span><br>

          <span><strong>Book flights With Low Deposit</strong></span>

          <span><br><a href="<?php echo base_url();?>reviews"><button class="btn btn-warning btn-lg">More Info</button></a>

          </span>

          </h1>

          <div class="hero__reviews" style="margin: 30px 165px;">

            <p>Average Customer Rating: <img src="<?php echo base_url(); ?>assets/images/review-stars.svg" alt="4 and a half stars average review"> 4.4/5</p>

            <p>Based on 3,600 verified reviews over the past year.</p>

          </div>

          

        </div>

      </div>

    </div>

  </div>

</div>



<!-- WHY CHOOSE -->

<div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="text-center why_us"><h3>Why book with <?php echo COMPANY_NAME; ?>?</h3></div>

    </div>

  </div>

  <br>

  <div class="row" id="container">

    <div class="col-md-6 col-sm-12 col-xs-12">

      <div class="usp-card"><div class="usp-card__image" style="background-image: url(<?php echo base_url('assets/images/icons/search.svg');?>)">

      </div>

      <div class="usp-card__content">

        <div class="usp-card__inner">

          <h2 class="usp-card__title heading-alt heading-alt--small">Easy Flight Search</h2>

          <p class="usp-card__para">Find your flight and choose from multiple different payment methods

         </p>

        </div>

      </div>

    </div>

  </div>

  <div class="col-md-6 col-sm-12 col-xs-12">

    <div class="usp-card">

      <div class="usp-card__image" style="background-image: url(<?php echo base_url('assets/images/icons/booking.svg');?>);">

      </div>

      <div class="usp-card__content">

        <div class="usp-card__inner">

          <h2 class="usp-card__title heading-alt heading-alt--small">Secure Booking</h2>

          <p class="usp-card__para">Use our easy online booking system to book flights quickly &amp;

          securely </p>

        </div>

      </div>

    </div>

  </div>

</div>

<br>

<div class="row" id="container">

  <div class="col-md-6 col-sm-12 col-xs-12">

    <div class="usp-card">

      <div class="usp-card__image" style="background-image: url(<?php echo base_url('assets/images/icons/choice.svg');?>);">

      </div>

      <div class="usp-card__content">

        <div class="usp-card__inner">

          <h2 class="usp-card__title heading-alt heading-alt--small">More Choice</h2>

          <p class="usp-card__para">Experience better flights &amp; connections with more than 600

          airlines worldwide</p>

        </div>

      </div>

    </div>

  </div>

  <div class="col-md-6 col-sm-12 col-xs-12">

    <div class="usp-card">

      <div class="usp-card__image" style="background-image: url(<?php echo base_url('assets/images/icons/multistop.svg');?>);">

      </div>

      <div class="usp-card__content">

        <div class="usp-card__inner">

          <h2 class="usp-card__title heading-alt heading-alt--small">Competitive prices</h2>

          <p class="usp-card__para">Competitive prices on over 600 airlines worldwide</p>

        </div>

      </div>

    </div>

  </div>

</div>

<br><br>

</div>



<!-- WHY CHOOSE -->

<div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="text-center why_us"><h3>FIND YOUR IDEAL FLIGHT EXPERIENCE</h3>

      	<h4><strong>From early booking discounts to last-minute price drops, our cheap flights are unmatched</strong></h4>

      </div>

      

    </div>

  </div>

  <br>

  <div class="row">

<div class="col-md-3 col-sm-6 col-xs-12 padding-top-xs padding-bottom-xs">



                    <div class="flightDeal margin-bottom-none">

                        <img alt="Cheap Flight Deals" src="<?= base_url(); ?>assets/images/ideal/nyc.jpg">



                        <div class="hpFlightSetText">

                            <h4>New York</h4>

                            <span>Economy</span>

                            <h4>£348</h4>

                        </div>

                        <a class="Des_click">

                            <span data-toggle="modal" data-target="#BookingPopup" class="hpFlightSetBtn">Book Now</span>

                            <h6 class="desti_bfp" hidden="">New York, [JFK]</h6>

                            <h6 class="cls_bfp" hidden="">JFK</h6>

                            <h6 class="dest_id" hidden="">91</h6>

                        </a>

                    </div>

                </div>

<div class="col-md-3 col-sm-6 col-xs-12 padding-top-xs padding-bottom-xs">



                    <div class="flightDeal margin-bottom-none">

                        <img alt="Cheap Flight Deals" src="<?= base_url(); ?>assets/images/ideal/dubai.jpg">



                        <div class="hpFlightSetText">

                            <h4>Dubai</h4>

                            <span>Economy</span>

                            <h4>£370</h4>

                        </div>

                        <a class="Des_click">

                            <span data-toggle="modal" data-target="#BookingPopup" class="hpFlightSetBtn">Book Now</span>

                            <h6 class="desti_bfp" hidden="">Dubai, [DXB]</h6>

                            <h6 class="cls_bfp" hidden="">DXB</h6>

                            <h6 class="dest_id" hidden="">122</h6>



                        </a>

                    </div>





                </div>

<div class="col-md-3 col-sm-6 col-xs-12 padding-top-xs padding-bottom-xs">



                    <div class="flightDeal margin-bottom-none">

                        <img alt="Cheap Flight Deals" src="<?= base_url(); ?>assets/images/ideal/colombo.jpg">



                        <div class="hpFlightSetText">

                            <h4>Colombo</h4>

                            <span>Economy</span>

                            <h4>£542</h4>

                        </div>

                        <a class="Des_click">

                            <span data-toggle="modal" data-target="#BookingPopup" class="hpFlightSetBtn">Book Now</span>

                            <h6 class="desti_bfp" hidden="">Colombo, [CMB]</h6>

                            <h6 class="cls_bfp" hidden="">CMB</h6>

                            <h6 class="dest_id" hidden="">157</h6>



                        </a>

                    </div>





                </div>

<div class="col-md-3 col-sm-6 col-xs-12 padding-top-xs padding-bottom-xs">



                    <div class="flightDeal margin-bottom-none">

                        <img alt="Cheap Flight Deals" src="<?= base_url(); ?>assets/images/ideal/manila.jpg">

                        <div class="hpFlightSetText">

                            <h4>Manila</h4>

                            <span>Economy</span>

                            <h4>£610</h4>

                        </div>

                        <a class="Des_click">

                            <span data-toggle="modal" data-target="#BookingPopup" class="hpFlightSetBtn">Book Now</span>

                            <h6 class="desti_bfp" hidden="">Manila, [MNL]</h6>

                            <h6 class="cls_bfp" hidden="">MNL</h6>

                            <h6 class="dest_id" hidden="">8</h6>

                        </a>

                    </div>





                </div>

        </div>

<br>



<br><br>

<!-- UNPUBLISHED DEALS -->





</div>















</div>

</div>

<!-- // WHY CHOOSE -->



      <!-- // AIRLINE DEALS -->

      <!-- OFFERS SLIDER 2-->

      <div class="owl-carousel offerslider owl-theme owl_offers2 hidden hidden-xs ">

        <div class="item" >

          <img src="<?php echo base_url();?>assets/images/offers/S_1.jpg" alt="<?php echo COMPANY_NAME; ?> - Etihad Airways Offers" class="img-responsive">

        </div>

        <div class="item" >

          <img src="<?php echo base_url();?>assets/images/offers/S_2.jpg" alt="<?php echo COMPANY_NAME; ?> - Turkish Airlines Offers" class="img-responsive">

        </div>

    <!--     <div class="item" >

          <img src="<?php echo base_url();?>assets/images/offers/S_3.jpg" alt="<?php echo COMPANY_NAME; ?> - Air India Airlines Offers" class="img-responsive">

        </div> -->

       <!--  <div class="item" >

          <img src="<?php echo base_url();?>assets/images/offers/S_4.jpg" alt="<?php echo COMPANY_NAME; ?> - United Airlines Offers " class="img-responsive">

        </div> -->

      </div>

      

      <section class="cheap_flights">

        <div class="container">

          <div class="row book100" >

            <div class="col-md-12">

              <h4 class="unpublish">Book 100s of airlines quickly & securely</h4>

              <p>We have access to over 600 airlines you can book today. Buy tickets safely using the currency and payment method of your choice.</p>

            </div>

          </div>

          <div class="row" id="quick_airlines">

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

              <a><img src="<?php echo base_url();?>assets/images/airlines/xallegiant-air-list.png.pagespeed.ic.q8fbUYGL-8.webp" >    </a>

            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

              <a><img src="<?php echo base_url();?>assets/images/airlines/xcebu-pacific-list.png.pagespeed.ic.d9spt3kSgV.webp">    </a>

            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

              <a><img src="<?php echo base_url();?>assets/images/airlines/xair-tanzania-list.png.pagespeed.ic.OoVG4dW9mx.webp">    </a>

            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

              <a><img src="<?php echo base_url();?>assets/images/airlines/xalaska-airlines-list.png.pagespeed.ic.prU78haN4A.webp">    </a>

            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

              <a><img src="<?php echo base_url();?>assets/images/airlines/xavianca-list.png.pagespeed.ic.MK3877nzXC.webp">    </a>

            </div>

         

             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

              <a><img src="<?php echo base_url();?>assets/images/airlines/xfrontier-airlines-list.png.pagespeed.ic.b5XWE8Y7WC.webp">    </a>

            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

              <a><img src="<?php echo base_url();?>assets/images/airlines/xisrair-airlines-list.png.pagespeed.ic.ck_KkKpbvc.webp">    </a>

            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

              <a><img src="<?php echo base_url();?>assets/images/airlines/xasky-airlines-list.png.pagespeed.ic.FMSLzId2cJ.webp">    </a>

            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

              <a><img src="<?php echo base_url();?>assets/images/airlines/xpal-express-list.png.pagespeed.ic.5Uz_8CIJex.webp">    </a>

            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

              <a><img src="<?php echo base_url();?>assets/images/airlines/xchina-eastern-list.png.pagespeed.ic.7IZdv_uHD-.webp">    </a>

            </div> 

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

              <a><img src="https://www.pngitem.com/pimgs/m/418-4189903_british-airways-100-years-logo-graphic-design-hd.png">    </a>

            </div> 

             <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">

              <a><img src="https://www.atlanticairways.com/media/1252/bumerki_yvirlitsmynd_1000x420_3val.gif">    </a>

            </div>

          </div> 



          <br>

         

          <br>

        </div>

           <div class="row container" >

            <div class="col-md-12 pull-left">

          <a href="airlines" style="font-size: 18px;text-decoration: underline;"> Read More ></a>

              </div>

            </div>

        

      </section>

      <br>

      <!-- ABOUT -->

      <section class="about" >

        <div class="container">

          <div class="row" >

            <div class="col-md-12 pull-left">

              <a href="<?php echo base_url();?>" title="<?php echo COMPANY_NAME; ?>" aria-label="<?php echo COMPANY_NAME; ?> Logo">

                <span><img src="<?php echo base_url();?>assets/images/logo.png"></span>

              </a><br><br>

              <p>Craving for a perfect holiday? You have chosen the right platform to make it happen. <?php echo COMPANY_NAME; ?> is one of the leading travel agents in the UK. It has one of the biggest online travel portal, where you can not only search the most suitable flights for your travel destination but also avail other traveling solutions. Being a distinguished name in the travel world, we provide a diverse range of travel services that includes cheap tickets of top airlines, accommodation in the best hotels, holiday packages, different forms of transportation, and other relevant services. So what are you waiting for? Plan your next trip with us and enjoy!</p>

            </div>

          </div>

        </div>

      </section>

      <!-- CHEAP FLIGHTS -->

      <section class="cheap_flights">

        <div class="container">

           <div class="popular-countries">

                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin">

                                  <svg data-name="Layer 1" viewBox="0 0 93.97 167.39" fill="currentColor" id="aa-icon-map-pin" xmlns="https://www.w3.org/2000/svg"><path class="cacls-1" d="M74.95 143.59H14.86a2.83 2.83 0 00-2.83 2.81v17.36a3.63 3.63 0 003.63 3.64h58.49a3.63 3.63 0 003.63-3.63V146.4a2.83 2.83 0 00-2.83-2.81zM45.05.04a47.17 47.17 0 00-45 44.68 46.87 46.87 0 005.83 25c.43 1 9.16 21.63 31.7 46.87q3.45 3.87 7.34 7.86a2.84 2.84 0 004.08 0q3.88-4 7.34-7.86c22.57-25.19 31.31-45.77 31.74-46.8a46.73 46.73 0 005.88-22.77A47 47 0 0045.05.04zM69.4 48.4a22.56 22.56 0 01-20.94 21 22.45 22.45 0 01-23.93-22.41 22.46 22.46 0 0122.46-22.45A22.46 22.46 0 0169.4 48.4z"></path></svg>

                                </use></svg>                            </span>

                             Cheap flights to India                    

                             </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                            Cheap Flights to Mumbai                      </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                            Cheap Flights to New Delhi                      </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                           Cheap Flights to Kochin                    </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                           Cheap Flights to Ahmedabad                        </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                           Cheap  Flights to Amritsar                       </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                            Cheap Flights to Goa                       </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                            Cheap  Flights to Chennai                      </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                           Cheap Flights to Pakistan                      </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                            Cheap Flights to Islamabad                        </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                           Cheap Flights to Lahore                        </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                            Cheap Flights to Karachi                        </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                            Cheap Flights to Nairobi                       </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                            Cheap Flights to Kenya                       </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                           Cheap Flights to Johannesburg                        </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                            Cheap  Flights to Banjul                        </a>

                                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                             Cheap Flights to Accra                         </a>



                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                           Cheap  Flights to Manila                         </a>

                            <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                           Cheap  Flights to New York                       </a>

                             <a class="country-pin" href="#" tabindex="0">

                            <span class="country-pin__icon">

                                <svg width="18" height="18" class="aa-icon aa-icon--map-pin"><use xlink:href="#aa-icon-map-pin"></use></svg>                            </span>

                            Cheap  Flights to Los Angeles                        </a>



                                    </div>

          </div>

        </div>

      </section>

      <!-- // CHEAP FLIGHTS -->

      <!-- FACILITY -->

      <section >

        <div class="container">

          <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 facility text-center">

              <i class="icofont-money-bag"></i>

              <div class="facility_text">

                <h3>Incredible Low Price</h3>

                <p> Best Rates, No Extra Hidden Charges and Taxes</p>

              </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 facility text-center">

              <i class="icofont-check-circled"></i>

              <div class="facility_text">

                <h3>Excellent Quality</h3>

                <p> Timely Dealings and Quick Ticketing Service</p>

              </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 facility text-center">

              <i class="icofont-air-ticket"></i>

              <div class="facility_text">

                <h3>Flexible Booking</h3>

                <p> Book Seats with £50 & Pay Balance Later</p>

              </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 facility text-center">

              <i class="icofont-support"></i>

              <div class="facility_text">

                <h3>Customer Care</h3>

                <p> Dedicated and Experienced Customer Support Service</p>

              </div>

            </div>

          </div>

        </div>

      </section>

      <!-- /FACILITY -->



<?php $this->load->view('include/footer') ?>



      <script >

      $(document).ready(function () {

        $('.cabin_cls_buton').on('click', function(){

            $('.cabin_cls_menu').toggle();

        });

        

        $('.travellers_buton').on('click', function(){

            $('.cabin_cls_menu').hide();

        });

        

        

        $('select[name=class_type]').on('change', function(){

            $('.cabin_cls_buton').text($(this).val());

            $('.cabin_cls_menu').hide();

        });

      });

      </script>

      <script src="<?php echo base_url();?>assets/js/calendars_config.js" ></script>

         <!-- select search models-->

   <?php $this->load->view('include/bookingnow'); ?>





<script src="/Assets/js/jquery-2.2.4.min.js"></script>

<script src="/Assets/js/bootstrap-datepicker.js"></script>







<script>



    $(document).ready(function () {

        $("#DepartureModal").autocomplete({

            source: function (request, response) {

                $.ajax({

                    url: "/Home/FindDeparture",

                    data: "{ 'prefixText': '" + request.term + "' }",

                    dataType: "json",

                    type: "POST",

                    contentType: "application/json; charset=utf-8",

                    dataFilter: function (data) { return data; },

                    success: function (data) {



                        response($.map(data, function (item) {

                            return {

                                value: item.FromDestination

                            }

                        }))

                    },

                    error: function (XMLHttpRequest, textStatus, errorThrown) {

                        alert(textStatus);

                    }

                });

            },

            minLength: 0,



            select: function (e, t) {

                $("#DepartureModal").val(t.item.FromDestination);

                //alert(t.item.CountryName)

                $("input").blur()

            }

        })

    });



</script>

<script>

    /* Destination */

    $(document).ready(function () {

        $("#DestinationModal").autocomplete({

            source: function (request, response) {

                $.ajax({

                    url: "/Home/FindDestination",

                    data: "{ 'prefixText': '" + request.term + "' }",

                    dataType: "json",

                    type: "POST",

                    contentType: "application/json; charset=utf-8",

                    dataFilter: function (data) { return data; },

                    success: function (data) {



                        response($.map(data, function (item) {

                            return {

                                value: item.FromDestination

                            }

                        }))

                    },

                    error: function (XMLHttpRequest, textStatus, errorThrown) {

                        alert(textStatus);

                    }

                });

            },

            minLength: 0,



            select: function (e, t) {

                $("#DestinationModal").val(t.item.FlightDestination);

                //alert(t.item.CountryName)

                $("input").blur()

            }

        })

    });





</script>



<script type="text/javascript">





    function CloseModal() {

        $("#fareForm_booking").trigger('reset')

        // $('.form-group').removeClass('has-error has-feedback has-error form-control has-success form-control');

        $('.form-group').removeClass('has-error has-feedback has-error has-success');

        $('.form-group').find('small.help-block').hide();

        $('.form-group').find('i.form-control-feedback').hide();

    }



    //var validator = $("#fareForm").validate();

    //validator.resetForm();



    $(document).ready(function () {

        Des_click();

        function Des_click() {



            $(".Des_click").click(function () {

                var des_txt = $(this).find(".desti_bfp").html();

                des_txt = jQuery.trim(des_txt);



                var dest_id = $(this).find(".dest_id").html();

                var dep_txt = $(this).find(".dep_bfp").html();

                dep_txt = jQuery.trim(dep_txt);



                var class_txt = $(this).find(".cls_bfp").html();

                $('#destiny_to_code').html(class_txt);   

                $("#fareForm_booking input[name=destinyCityHidden]").val(dest_id);

                

                class_txt = jQuery.trim(class_txt);



                var aircode_txt = $(this).find(".airCode_bfp").html();

                aircode_txt = jQuery.trim(aircode_txt);



                //var cabin_txt = $(this).find(".cabin_bfp").html();

                //cabin_txt = jQuery.trim(cabin_txt);

                //cabin_txt = cabin_txt.match(/\((.*)\)/);

                //alert(cabin_txt[1]);

                //var test = "C";



                $("#DepartureModal").attr("value", dep_txt);

                $("#DestinationModal").attr("value", des_txt);



                $("#fareForm_booking input[name=destinyCity]").val(des_txt);





                $("#airCode").attr("value", aircode_txt);

                //$('#cabinClass_bfp').select2().val(test).trigger("change");

                //$("#cabinClass_bfp").attr("value", cabin_txt[1]);

            });

        }

    });



    $(document).ready(function () {

      $('body').on('click',function(event){

   if(!$(event.target).is('.cabin_cls_buton') && !$(event.target).is('.class_type')){

        $('.cabin_cls_menu').css('display','none')

   }

});



        $('#fareForm_booking2').bootstrapValidator({

            container: '#messages',

            feedbackIcons: {

                valid: 'fa fa-check',

                invalid: 'fa fa-times',

                validating: 'fa fa-refresh'



            },

            submitHandler: function (form) {

                BookingPopup();

                return false;

            },

            fields: {

                DepartureModal: {

                    validators: {

                        notEmpty: {

                        }

                    }

                },



                DestinationModal: {

                    validators: {

                        notEmpty: {

                        }

                    }

                },



                departureDateModal: {

                    validators: {

                        notEmpty: {

                        }

                    }

                },



                returnDateModal: {

                    validators: {

                        notEmpty: {

                        }

                    }

                },



            }

        });

    });



    $("#departureDateModal").on('change keyup input', function () {

        $('#fareForm_booking')

            // Get the bootstrapValidator instance

            .data('bootstrapValidator')

            // Mark the field as not validated, so it'll be re-validated when the user change date

            .updateStatus('departureDateModal', 'NOT_VALIDATED', null)

            // Validate the field

            .validateField('departureDateModal');

        // alert("test");

    });

    $("#returnDateModal").on('change keyup input', function () {

        $('#fareForm_booking')

            // Get the bootstrapValidator instance

            .data('bootstrapValidator')

            // Mark the field as not validated, so it'll be re-validated when the user change date

            .updateStatus('returnDateModal', 'NOT_VALIDATED', null)

            // Validate the field

            .validateField('returnDateModal');

    });



     $(document).on('click','#BookNowmodal',function(e){

            e.preventDefault();

            // BookingPopup();

        var class_type = $('select[name=class_type]').find('option:selected').val();

         var deptCity = $("#fareForm_booking input[name=deptCity]").val();

         var Adult = $("#fareForm_booking input[name=Adults]").val();

        var Child = $("#fareForm_booking input[name=Children]").val();

        var Infant =$("#fareForm_booking input[name=Infant]").val();

        var deptdate =$("#fareForm_booking input[name=departuredate_RoundW]").val();

        var returndate=$('#arrival_date_input1').val();

        var phone=$('#phoneNumber2').val();



        if(deptCity=="" || deptdate=="" || returndate=="" || phone==""){

          $('.booknowerror').html('Fill out all fields');

            return false;

        }



        $('#dept_date').html(deptdate);      

        $('#return_date').html(returndate);      

        $('#flight_class_type').html(class_type);   

          var total_passengers = Adult +'-Adult';

        if(Child > 0){

            total_passengers = total_passengers + ', '; 

            total_passengers = total_passengers + Child+'-Children';

        }

        if(Infant > 0){

            total_passengers = total_passengers + ', '; 

            total_passengers = total_passengers + Infant +'-Infant ';

        }

        $("#total_passengers").html(total_passengers);

        $('#BookingPopup').modal('hide')

        $('body').css('pointer-events','none');

         $('#preloader').show();

        $('#loadingModal').modal('show');

            window.setTimeout(function() {

          $("#fareForm_booking").submit();

            return false;



        }, 8000);

     });



    function BookingPopup() {

        $("#BookNowmodal").prop("disabled", true);

        var deptCity = $("#fareForm_booking input[name=deptCity]").val();

        var destinyCity = $("#fareForm_booking input[name=destinyCity]").val();

        var departureDateModal = $("#fareForm_booking input[name=departureDateModal]").val();

        var returnDateModal = $('#returnDateModal').val();

        var deptCityHidden=$("#fareForm_booking input[name=deptCityHidden]").val();

        var destinyCityHidden=$("#fareForm_booking input[name=destinyCityHidden]").val();

        var Adult = $("#fareForm_booking input[name=Adult]").val();

        var Child = $("#fareForm_booking input[name=Child]").val();

        var Infant =$("#fareForm_booking input[name=Infant]").val();

        var cabinClass =$('select[name=cabinClass_bfp]').find('option:selected').text();

        var trip_type = 'RoundT';



        // var marketingMedium = getParameter('fr');



        $.ajax({

            traditional: true,

            url: "/Home/BookingPopupSubmit",

            data:

            {

                deptCity: deptCity,

                destinyCity: destinyCity,

                deptCityHidden: deptCityHidden,

                destinyCityHidden: destinyCityHidden,

                departuredate_RoundW: departureDateModal,

                returndate_RoundW: returnDateModal,

                Adults: Adult,

                Children: Child,

                Infant: Infant,

                class_type: cabinClass,

                trip_type: trip_type,

                phoneNumber: '',

                buseragent: '',

                ipcilent: '',

                fooSessionid: '',

                session_key: '',

                departuredate_OneW: '',

                // marketingMedium,

            },

            dataType: "json",

            type: "POST",

            success: function (response) {

                // window.location.href = response.redirectTo;

            },



        });

    }





</script>





    </div>

</div>  

    

 

    

    

    

    

    

    

    </body>

  </html>