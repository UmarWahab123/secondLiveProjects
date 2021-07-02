   <!-- Footer -->

    <footer>

        <div class="footer-upper">

            <div class="container">

                <div class="newsletter text-center">

                    <div class="section-title section-title-white text-center">

                        <h2>Newsletter Signup</h2>

                        <div class="section-icon section-icon-white">

                            <i class="flaticon-diamond"></i>

                        </div>

                        <p>Subscribe to our weekly newsletter to get updated on our latest deals</p>

                    </div>

                    <form>

                        <div class="form-group">

                            <input type="text" class="form-control" id="search">

                            <a href="#"><span class="search_btn"><i class="fa fa-paper-plane" aria-hidden="true"></i> Sign Up</span></a>

                        </div>

                    </form>

                </div>

                <div class="footer-links">

                    <div class="row">

                        <div class="col-md-3 col-sm-12">

                            <div class="footer-about footer-margin">

                                <div class="about-logo">

                                    <img src="<?=base_url();?>assets/frontend/images/Yatra-white.png" alt="Image">

                                </div><br>

                                <div class="about-location mt-3">

                                    <ul>

                                        <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> <?= COMPANY_ADDRESS; ?></li>

                                        <li><i class="flaticon-phone-call"></i><?= COMPANY_PHONE; ?></li>                                        

                                        <li><i class="flaticon-mail"></i><?= COMPANY_EMAIL; ?></li>

                                    </ul>

                                </div>

                               

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-4">

                            <div class="footer-links-list footer-margin">

                                <h3>Who We Are</h3>

                                <ul>

                                    <li><a href="#">Home <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/about-us">About Us <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/terms-conditions">Terms & Conditions <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/privacy-policy">Privacy Policy <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/cookie-policy">Cookie Policy <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/fly-now-pay-later">Fly Now Pay Later <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                </ul>

                            </div>

                        </div>

                         <div class="col-md-3 col-sm-4">

                            <div class="footer-links-list footer-margin">

                                <h3>Important Information</h3>

                                <ul>

                                    <li><a href="/visa-requirements">Visa Requirement <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/passenger-rights">Passenger Rights<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/foreign-travel-advice">Foreign Travel Advice <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/brexit-travel-advice">Brexit Travel Advice<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/modern-slavery-statement">Modern Slavery Statement <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/airlines">Airlines We Ticket<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                </ul>

                            </div>

                        </div>

                         <div class="col-md-3 col-sm-4">

                            <div class="footer-links-list footer-margin">

                                  <h3>Customer Service</h3>

                                <ul>

                                    <li><a href="/contact-us">Contact Us <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/make-payment">Make a Payment <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/faqs">FAQs <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/customer-care">Customer Support <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/support">Help & Support <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li><a href="/financial-protection">Financial Protection<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                </ul>

                            </div>

                        </div>

                        

                    </div>

                </div>

            </div>

        </div>

        <div class="copyright">

            <div class="container">

                <div class="row">

                    <div class="col-xs-6">

                        <div class="copyright-content">

                            <p><?=date('Y')?> <i class="fa fa-copyright" aria-hidden="true"></i> <?= COMPANY_NAME; ?></a></p>

                        </div>

                    </div>

                    <div class="col-xs-6">

                        <div class="payment-content">

                            <ul>

                                <li>We Accept</li>

                                <li>

                                    <img src="<?=base_url();?>assets/frontend/images/payment1.png" alt="Image">

                                </li>

                                <li>

                                    <img src="<?=base_url();?>assets/frontend/images/payment2.png" alt="Image">

                                </li>

                                <li>

                                    <img src="<?=base_url();?>assets/frontend/images/payment3.png" alt="Image">

                                </li>

                                <li>

                                    <img src="<?=base_url();?>assets/frontend/images/payment4.png" alt="Image">

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <!-- Footer Ends --> 

<?php $this->load->view('frontend/layout/js'); ?>



    </body>

</html>