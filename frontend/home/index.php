<?php $this->load->view('frontend/layout/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">
<section style="padding-top: 60px;">
   <div class="container">
   <div class="col-md-4" style="background-color: #3374FF;">
    <div class="flightSearchForm">
    <div class="ro">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="margin-bottom:1.25rem">
      <li class="nav-item active text-center">
         <a class="nav-link " id="roundwayID" data-toggle="pill" href="#flight-search-form" role="tab" aria-controls="flight-search-form" aria-selected="true" ><b>Round Trip</b></a>
      </li>
      <li class="nav-item text-center">
         <a class="nav-link" id="onewayID" data-toggle="pill" href="#flight-search-form" role="tab" aria-controls="flight-search-form" aria-selected="false"><b>One Way</b></a>
      </li>
   </ul>

    </div>
    </div>
 
   <form method="GET" action="#" enctype="multipart/form-data">
      <div class="form-group">
         <input type="text" name="name" class="form-control" placeholder="From: country,city or airport" required/>
      </div>
      <div class="form-group">
         <input type="text" name="name" class="form-control" placeholder="To: country,city or airport" required/>
      </div>
      <div class="tours-calendar input-group form-group" >
         <input name="departuredate_OneW" id="oneway_arrival" onfocus="myFunctionNo(this)" placeholder="Departure Date" required  type="text" class="form-control oneway_arrival" style=" height: 56px !important;font-size: 1rem !important;">
      </div>
      <div class="form-group">
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
      </div>
            <div class="form-group">
               <input type="text" name="phone" class="form-control" placeholder="Valid Phone Number" required/>
            </div>

            
                    <div class="col-lg-12 p-0 fix_input_type">

                      <button class="btn btn-danger btn-block search-btn enquiry-fbtn" type="submit" style="font-size: 1.2rem; background: transparent linear-gradient(257deg,#f79c34 0,#ff6c1d 100%) 0 0 no-repeat padding-box; height: 56px;" ><b>SEARCH FLIGHTS</b></button>

                    </div>
                    <br></br>

        <div class="table">

          <tr>

             &nbsp  &nbsp  &nbsp <td><img src="" alt=""><b><span style="color:white;">TRUSTED CHOICE</span></b>
              &nbsp  &nbsp   &nbsp  &nbsp  &nbsp  &nbsp   

            <img src="" alt=""><span style="color:white;"><b>SECURE BOOKING</span></b></td>

          </tr>

        </div>

   </div>
   </div>



 
        <div class="hero__content-alt">
          <div  class="text-center">

          <span class="hero__customers"> <i class="fa fa-heart" style="color:red"></i>  Over&nbsp;<strong>thousands of<strong>&nbsp;happy customers</span>

          <h1 class="hero__title">

          <span>Search &amp; Book Flights</span><br>

          <span><strong>Book flights With Low Deposit</strong></span>

          <span><br><a href="<?php echo base_url();?>reviews"><button class="btn btn-warning btn-lg">More Info</button></a>

          </span>

          </h1>

          <div class="hero__reviews" style="margin: 30px 165px;">

          
            <p>Based on 3,600 verified reviews over the past year.</p>

          </div>

          
          </div>
        </div>
      </section>

<?php $this->load->view('frontend/layout/footer'); ?>