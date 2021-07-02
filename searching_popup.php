<!-- Loading Poupup -->

  <div id="preloader" style="display:none;">



    <!-- Modal -->

    <div class="modal fade" id="loadingModal" role="dialog" >

      <div class="modal-dialog modal-lg" >

        

        <!-- Modal content-->

        <div class="modal-content" >

          <div class="modal-header text-center">

            <img src="<?php echo base_url();?>assets/images/logo.png" class="img-responsive " style="margin: 0 auto;">

          </div>

          <div class="modal-body" style="padding:0">

            <div class="search_progress_bar" >
              <span style="width:100%;">
                <span class="search_progress">
                  <img src="<?php echo base_url();?>assets/images/outbound_plane.png" class="img-responsive pull-right" style="height: 15px">  
                </span>
              </span>
            </div>
            
            <div class="text-center search_popup_heading">
              <b>Flight Search in Progress</b>
              <p style="margin: 0px" class="hidden-xs">Searching for best deal for you. Kindly wait, this may take little time</p>
            </div>

            <div class="row search_airport_details">

              <div class="col-md-4 col-sm-4 col-xs-4 text-center search_data">

                <span class="dept_from_city"></span>

                <h3 id="dept_from_code"></h3>

              </div>

              <div class="col-md-4 col-sm-4 col-xs-4 text-center">

                <p id="trip_arrow_right" > <i class="icofont-long-arrow-right"></i></p>

                <p id="trip_arrow_left" > <i class="icofont-long-arrow-left"></i></p>

              </div>

              <div class="col-md-4 col-sm-4 col-xs-4 text-center search_data">

                <span class="destiny_to_city"></span>

                <h3 id="destiny_to_code"></h3>

              </div>

            </div>



            <div class="row search_flight_details">

              <div class="col-md-2 col-lg-2 col-sm-1 hidden-xs text-left">

              </div>

              <div class="col-md-2 col-lg-2 col-sm-2 col-xs-3  col-xs-offset-1 text-left">

                <span class="dept_date_heading heading">Departure</span>

                <p id="dept_date"></p>

              </div>

              <div class="col-md-2 col-lg-2 col-sm-2 col-xs-3 text-left return_date_box">

                <span class="return_date_heading heading">Return</span>

                <p id="return_date"></p>

              </div>

              <div class="col-md-2 col-lg-2 col-sm-2 hidden-xs text-left">

                <span class="heading">Class</span>

                <p id="flight_class_type"></p>

              </div>



              <div class="col-md-4  col-lg-3 col-sm-5 col-xs-5 text-left">

                <span class="heading">Travellers</span>

                <p id="total_passengers"></p>

              </div>

            </div>



             <div class="row search_contact_info">

              <b><h3 class="text-center assistance" >For any assistance or help, Call now</h3></b>

              <h2 class="text-center call_no"><i class="fa fa-phone"></i> <?php echo COMPANY_PHONE; ?></h3>
              
<div class="col-md-4 col-xs-12" style="float: left;
    border-right: 2px solid #d4d4d4;
  text-align: center;
    padding: 10px" >
    
    <span><img width="80px" src="<?php echo base_url();?>assets/images/iatalogo.png"></span>
    <span><img  width="60px" src="<?php echo base_url();?>assets/images/atollogo.png"></span>
    <p><h4 style="text-align:center">IATA & ATOL PROTECTION</h3></p>
<p>All your financial transcation are protected, putting your mind at ease</p>
    
    
</div>
<div class="col-md-4 col-xs-12" style="    float: left;
    border-right: 2px solid #d4d4d4;
text-align: center;
min-height: 180px;
    padding: 10px;">
    
    <span><img src="https://mainimageservice.azureedge.net/00-tup-web/images/fnpl/fnpl_logo_how-to.png"></span>
    <p>
        <h4 style="text-align:center" >FLY NOW PAY LATER</h3>
        
    </p>
    <p>Fund your travel plans in installments without any interest, after you have taken the flight.</p>
    
    </div>
<div class="col-md-4 col-xs-12" style="    float: left;
   text-align: center;
   min-height: 180px;
    padding: 10px;">
    
    <span><img width="60px" src="<?php echo base_url();?>assets/images/payment_plan.png"></span>
    <p><h4 style="text-align:center">INSTALLMENT PLAN</h3></p>
    <p>Spread your flight cost and pay in 2-4 easy installments</p>
    
    </div>
             </div>

          </div>


          <!-- <div class="modal-footer">

            Modal Footer

          </div> -->

        </div>

        

      </div>

    </div>



  </div>