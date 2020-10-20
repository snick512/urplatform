  <!--Main layout-->
  
  <div class="container my-5 py-5 z-depth-3">
  
  <main class="mt-5 pt-4">

  
    
    <div class="container">

      <!--Section: Main features & Quick Start-->
      <section>

      <h3 class="font-weight-bold">Welcome to UR CPU</h3>
      <?php if ($auth->isLoggedIn()) {
        echo "<h3 class=\"h3 text-center mb-5\">Free the spirits, $uruser</h3>";
      } else {
        echo "<h3 class=\"h3 text-center mb-5\">Free the spirits, <a href=\"login/\">login</a></h3>";
      } ?>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-code fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Code share</h5>
                <p class="grey-text">We don't lock you out of your project. You're in complete control of the source regardless where it's hosted.</p>
              </div>
            </div>
            <!--/First row-->

            <div style="height:30px"></div>

            <!--Second row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-book fa-2x blue-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Detailed documentation</h5>
                <p class="grey-text">No trickery. Notes to help you if you don't want our help after project completion.
                </p>
              </div>
            </div>
            <!--/Second row-->

            <div style="height:30px"></div>

            <!--Third row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-graduation-cap fa-2x cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Cadence and Courage</h5>
                <p class="grey-text">Our support plans offer sure confidence to continue on your own.</p>
              </div>
            </div>
            <!--/Third row-->

          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <p class="h5 text-center mb-4">Since it's Halloween season!</p>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NIpns4R9Ep4" allowfullscreen></iframe>
            </div>
          </div>
          <!--/Grid column-->

        </div>
        <!--/Grid row-->

      </section>
     

<!-- Services --> 
</div>
<div class="container my-5">

  <!-- Section -->
  <section>

    <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4"></h6>
    <h3 class="font-weight-bold text-center dark-grey-text pb-2">Services & Solutions</h3>
    <hr class="w-header my-4">
    <p class="lead text-center text-muted pt-2 mb-5">A crypto community doing crypto things.</p>

    <div class="row">

      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card text-center bg-success text-white">
          <div class="card-body">
            <p class="mt-4 pt-2"><i class="fab fa-btc fa-4x"></i></p>
            <h5 class="font-weight-normal my-4 py-2"><a class="text-white" href="#">Cryptocurrency Exchange</a></h5>
            <p class="mb-4">Our identity aware application ensures transactions and information are kept private.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card text-center blue lighten-1 text-white">
          <div class="card-body">
            <p class="mt-4 pt-2"><i class="fas fa-shipping-fast fa-4x text-white"></i></p>
            <h5 class="font-weight-normal my-4 py-2"><a class="text-white" href="#">Dropship</a></h5>
            <p class="mb-4">Need a proxy making a purchase? No problem!</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card text-center deep-purple lighten-1 text-white">
          <div class="card-body">
            <p class="mt-4 pt-2"><i class="fas fa-crop-alt fa-4x"></i></p>
            <h5 class="font-weight-normal my-4 py-2"><a class="text-white" href="#">Webmaster</a></h5>
            <p class="mb-4">WordPress, old to new, e-Commerce, management, hosting and more.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3">
        <div class="card text-center orange lighten-1 text-white">
          <div class="card-body">
            <p class="mt-4 pt-2"><i class="fas fa-yin-yang fa-4x text-white"></i></p>
            <h5 class="font-weight-normal my-4 py-2"><a class="text-white" href="#">"Just Ask"</a></h5>
            <p class="mb-4">Really, just ask.</p>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- Section -->

</div>





      <hr class="my-5">

      <!--Section: Not enough-->
      <section>

        <h2 class="my-5 h3 text-center">Get started</h2>
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

      </section>

   <!--Section: More-->
      <section>

        <h2 class="my-5 h3 text-center"></h2>

<div id="lhc_faq_embed_container" ></div>


<script type="text/javascript">
var LHCFAQOptions = {url:'replace_me_with_dynamic_url',identifier:''};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = '//urcpu.com/support/index.php/faq/embed';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>


      </section>
      <!--Section: More-->

    </div>
  </div>
  
  </main>
  <!--Main layout-->

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

  <script>var LHC_API = LHC_API||{};
LHC_API.args = {mode:'widget',lhc_base_url:'//urcpu.com/support/index.php/',wheight:450,wwidth:350,pheight:520,pwidth:500,domain:'urcpu.com',leaveamessage:true,check_messages:false,position_placement:'full_height_right'};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.setAttribute('crossorigin','anonymous'); po.async = true;
var date = new Date();po.src = '//urcpu.com/support/design/defaulttheme/js/widgetv2/index.js?'+(""+date.getFullYear() + date.getMonth() + date.getDate());
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>


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