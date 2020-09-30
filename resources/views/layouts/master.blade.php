<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Project Admin</title>

  <!-- Favicons -->
  <link href="{{asset('frontend') }}/img/favicon.png" rel="icon">
  <link href="{{asset('frontend') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('frontend') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('frontend') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="{{asset('frontend') }}/stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="{{asset('frontend') }}/stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="{{asset('frontend') }}/css/style.css" rel="stylesheet">
  <link href="{{asset('frontend') }}/css/style-responsive.css" rel="stylesheet">
  <script src="{{asset('frontend') }}/lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>CovNewss<span>19</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
       
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('frontend') }}/img/Icon-Admin.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Administaror</h5>
          <li class="mt">
              
          <a class="nav-link" href="{{ ('Hospice') }}/index.html">
        <i class="fa fa-home"></i>
          <span>Home</span></a>
      </li>
      

          
            
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Edit</span>
              </a>
           
         
            <ul class="sub">
              <li><a href="form_component.html">Form Components</a></li>
              <li><a href="advanced_form_components.html">Advanced Components</a></li>
              <li><a href="form_validation.html">Form Validation</a></li>
              <li><a href="contactform.html">Contact Form</a></li>
            </ul>
          </li>
        

        
        <!-- sidebar menu end-->
      </div>
    </aside>


    
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>INPUT DATA</h3>
            </div>
           

            <div class="content">
<section class="header5 cid-r7o72Bhmed mbr-fullscreen" id="header5-3">
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(130, 130, 130);">
    </div>
    <div class="form-row">
             <div class="col-md-6 form-group">
              <div class="heading">
                Nama Fasilitas Kesehatan*
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
               Harga
              </div>
              <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
                Jenis Fasilitas Kesehatan*
              </div>
              <select name="department" id="department" class="form-control">
                <option value="Rumah Sakit">Rumah Sakit</option>
                <option value="Klinik">Klinik</option>
                <option value="Puskesmas">Puskesmas</option>
                <option value="Lab">Lab</option>
              </select>
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
               Nomor Telepon
              </div>
              <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
                Jenis Tes Yang Tersedia*
              </div>
              <select name="doctor" id="doctor" class="form-control">
                <option value="Rapid">Rapid</option>
                <option value="PCR/Swab">PCR/Swab</option>
              </select>
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
                Alamat
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
            </div>
            <br>
            <div class="container-contact100-form-btn">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31734.739059850777!2d106.8603926887223!3d-6.151858346234361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f54708b52455%3A0xee09ba21181ebb71!2sRS.%20Mitra%20Keluarga%20Kelapa%20Gading!5e0!3m2!1sid!2sid!4v1601448769580!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <button class="contact100-form-btn">
            <span>
            Submit
            <i class="fa fa-long-arrow-right m-1-7" aria-hidden="true"></i>
          <a class="nav-link" href="{{ ('login_v1') }}/index.html">
         </span>
            <br>      
          <a class="nav-link" href="{{ ('loginn') }}/index.html">
       
            </button>
</section>
  
</section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('frontend') }}/lib/jquery/jquery.min.js"></script>

  <script src="{{asset('frontend') }}/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="{{asset('frontend') }}/include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="{{asset('frontend') }}/lib/jquery.scrollTo.min.js"></script>
  <script src="{{asset('frontend') }}/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="{{asset('frontend') }}/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="{{asset('frontend') }}/lib/common-scripts.js"></script>
  <script type="{{asset('frontend') }}/text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="{{asset('frontend') }}/text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="{{asset('frontend') }}/lib/sparkline-chart.js"></script>
  <script src="{{asset('frontend') }}/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }

    
  </script>
</body>

</html>
