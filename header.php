<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keyword" content="">
  <title><?php echo isset($title) ? $title : COMMON_TITLE ; ?></title>
 <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/png"> 
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://unpkg.com/jquery-cookie-bubble@1.0.0/dist/cookieBubble.min.css'>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icofont/icofont.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.12.1/jquery-ui.min.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/jalert/dist/jAlert.css" />

   <!-- <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/cookieconsent.min.css"  />   -->
  


  <!-- Start Cookie Consent plugin -->
 <!-- <script>
  window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#efefef",
          "text": "#404040",

        },
        "button": {
          "background": "#0f3661",
          "text": "#fff"
        }
      },
      "theme": "classic",
      "position": "top",
      "static": true,
      "padding":"20px 100px",
      "content": {
        "message": "We use cookies to provide you with the best experience on our site. By continuing you agree to our ",
        "dismiss": "Accept and Continue Browsing!",
        "link": "Cookies Policy",
        "href": "<?php echo base_url();?>cookie-policy"
      }
    });
  });
  </script> -->

  <!-- End Cookie Consent plugin -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108818967-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108818967-2');
</script>


</head>

  <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5eff448a760b2b560e6fb0a5/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<body>
 <!--  <div class="topbar">
    <marquee direction="left"> <i class="fa fa-warning"></i>
Under the instructions issued by the Government of United Kingdom and Northern Ireland: Considering the severity of COVID-19, we strongly advise not to visit of the office premises until it is a matter of extreme urgency. To visit the office premises you must have an early appointment/booking with us.
    </marquee>
  </div> -->
<div class="hidden-xs">
   <?php $this->load->view('include/desktopmenu'); ?>

</div>

<div class="visible-xs mobile-div">
   <?php $this->load->view('include/mobilemenu'); ?>
</div>

