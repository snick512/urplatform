<?php 

include "login/misc/pagehead.php";
//$uruser = $_SESSION['username'];

require "login/misc/pullnav.php";  
?>
  
  <!--Main layout-->
  <main class="mt-5 pt-4">
  <div class="container my-5 py-5 z-depth-1">


<!-- Steps --> 

<!-- Section -->
<section>
    
    <style>
      .timeline {
        position: relative;
        list-style: none;
        padding: 1rem 0;
        margin: 0;
      }

      .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        margin-left: -1px;
        background-color: #50a1ff;
      }

      .timeline-element {
        position: relative;
        width: 50%;
        padding: 1rem 0;
        padding-right: 2.5rem;
        text-align: right;
      }

      .timeline-element::before {
        content: '';
        position: absolute;
        right: -8px;
        top: 1.35rem;
        display: inline-block;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        border: 2px solid #50a1ff;
        background-color: #fff;
      }

      .timeline-element:nth-child(even)::before {
        right: auto;
        left: -8px;
      }

      .timeline-element:nth-child(even) {
        margin-left: 50%;
        padding-left: 2.5rem;
        padding-right: 0;
        text-align: left;
      }

      @media (max-width: 767.98px) {
        .timeline::before {
          left: 8px;
        }
      }

      @media (max-width: 767.98px) {
        .timeline-element {
          width: 100%;
          text-align: left;
          padding-left: 2.5rem;
          padding-right: 0;
        }
      }

      @media (max-width: 767.98px) {
        .timeline-element::before {
          top: 1.25rem;
          left: 1px;
        }
      }

      @media (max-width: 767.98px) {
        .timeline-element:nth-child(even) {
          margin-left: 0rem;
        }
      }

      @media (max-width: 767.98px) {
        .timeline-element {
          width: 100%;
          text-align: left;
          padding-left: 2.5rem;
          padding-right: 0;
        }
      }

      @media (max-width: 767.98px) {
        .timeline-element:nth-child(even)::before {
          left: 1px;
        }
      }

      @media (max-width: 767.98px) {
        .timeline-element::before {
          top: 1.25rem;
        }
      }
    </style>
    
    <h3 class="font-weight-bold text-center dark-grey-text pb-2">Dropship flow</h3>
    <hr class="w-header my-4">

    <div class="row">
      <div class="col-lg-8 mx-auto">

        <ol class="timeline">
          <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">You request a dropship</h5>
            <p class="grey-text font-small"><i class="far fa-smile fa-4x"></i></p>
            <p class="text-muted">Let us know where the product is (eBay, Amazon, etc) and what currency you'll be paying in..</p>
          </li>

          <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">We review</h5>
            <p class="grey-text font-small"><i class="far fa-eye fa-4x"></i></p>
            <p class="text-muted">UR CPU reviews the dropship request to determine eligibility and requirements.</p>
          </li>

          <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">Verify & Process</h5>
            <p class="grey-text font-small"><i class="fas fa-check fa-4x"></i> <i class="fas fa-fingerprint fa-4x"></i></p>
            <p class="text-muted">Once review is complete, we verify any information necessary and begin processing your dropship.</p>
          </li>

          <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">Track and get your product</h5>
            <p class="grey-text font-small"><i class="fab fa-dhl fa-4x"></i>> <i class="fab fa-fedex fa-4x"></i> <i class="fab fa-ups fa-4x"></i> <i class="fab fa-usps fa-4x"></i></p>
            <p class="text-muted">We'll notify you when your product ships and give you the tracking IDs.</p>
          </li>
        </ol>
        <hr class="my-5">
        <center>   <a href="consult.php"
   onclick="window.open(this.href,'targetWindow',
                                   `toolbar=no,
                                    location=no,
                                    status=no,
                                    menubar=no,
                                    scrollbars=yes,
                                    resizable=yes,
                                    width=500,
                                    height=600`);
 return false;"><button class="btn blue-gradient">Free consultation</button></a></center>

      </div>

      
    </div>
    
  </section>
  <!-- Section -->




</div>
  </main>

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://urcpu.com/gate/" target="_blank"
        role="button"><i class="fas fa-credit-card ml-2"></i> Make a payment</a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/switchboardoffice" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/snick512" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/tyclifford" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>
      <a href="https://github.com/snick512" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 UR CPU, Tyeme & Co., dba | +1-631-663-1317
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>