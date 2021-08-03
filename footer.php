<?php
$pages = array(
    'index.php' => 'Home',
    'services.php' => 'Our Services',
    'aboutus.php' => 'About',
    'gallery.php' => 'Gallery',
    'menu.php' => 'Menu',
    'blog.php' => 'Blog',
    'contact.php' => 'Contact',
) ;

$currentPage = basename($_SERVER['REQUEST_URI']) ;
?>
<!-- footer -->
               <section class="inside-page">
                     <div class="inside-wrapper container">
                        <div class="row">
                           <div class="col-md-5">
                              <h4 class="no-margin-top">Frequently asked questions</h4>
                              <p>Fusce mollis imperdiet interdum donec eget metus auguen unc, Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores.</p>
                           </div>
                           <div class="col-md-7">
                              <!-- Accordions -->
                              <div class="panel-group" id="accordion">
                                 <!-- Question 1 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Do you offer vegan options?</a>
                                       </h6>
                                    </div>
                                    <!-- /panel-heading -->
                                    <div id="collapse1" class="panel-collapse collapse in">
                                       <div class="panel-body">
                                          <p>Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->
                                 <!-- Question 2 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Do you offer catering services?</a>
                                       </h6>
                                    </div>
                                    <!-- /panel-heading -->
                                    <div id="collapse2" class="panel-collapse collapse">
                                       <div class="panel-body">
                                          <p>Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->
                                 <!-- Question 3 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">How many days in advance should I order?</a>
                                       </h6>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                       <div class="panel-body">
                                          <p>Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->              
                              </div>
                              <!-- /.accordion -->    
                           </div>
                           <!-- /col-md- -->    
                        </div>
                        <!-- /row -->     
                     </div>
                     <!-- /inside-wrapper -->
                  </section>
                  <footer class="footer">
                     <!-- image gradient overlay-->
                     <div class="gradient-overlay top-to-bottom"></div>
                     <div class="inside-wrapper container">
                        <div class="col-md-5">
                           <div class="brand-footer">
                              <a href="index.php">
                              <img src="img/logo.png" alt="" class="img-responsive" style="margin-top:40px" >
                              </a>
                           </div>
                        </div>
                        <div class="col-md-3 margin-footer text-center-sm">
                           <div class="row">
                                 <ul class="custom categories">
                                    <?php foreach ($pages as $filename => $pageTitle) {
                                        if ($filename == $currentPage) { ?>
                                    <li class="nav-item active">
                                        <a class="active" href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a>
                                    </li>
                                    <?php } else {?>
                                    <li class="nav-item">
                                         <a href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a>
                                    </li>
                                    
                                <?php }
                                    }?>
                                 </ul>
                              </div>
                        </div>
                        <div class="col-md-4 margin-footer text-center-sm">
                           <!-- Logo -->
                           <p><i class="fas fa-map-marker-alt margin-icon"></i>Chocolate Studio :<a href="https://goo.gl/maps/gpzEiJ8zMsiGP6ap9">5929, Green Avenue Lane, DLF Phase IV, Gurgaon 122009</a></p>
                           <p><i class="fas fa-phone-alt margin-icon"></i>Tamanna :<a href="tel:+919953359003">+91 9953359003</a>
                           <p style="margin-bottom: 0rem;"><i class="fas fa-phone-alt margin-icon"></i>Praveen :<a href="tel:+919810116837">  +91 9810116837</a></p>
                           <p><i class="far fa-clock margin-icon"></i>Mon-Sat: 9am-5pm</p>
                           <!--Social icons -->
                           <div class="social-media ">
                              <a href="#" title=""><i class="fas fa-envelope"></i></a>
                              <a href="#" title=""><i class="fab fa-whatsapp"></i></a>
                              <a href="#" title=""><i class="fab fa-twitter"></i></a>
                              <a href="#" title=""><i class="fab fa-facebook"></i></a>
                              <a href="#" title=""><i class="fab fa-instagram"></i></a>
                           </div>
                           <!-- /brand -->
                        </div>
                        <div class="col-md-12 text-center">
                           <p class="copy">Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="http://parriez.com">Parriez Choccasions</a>. All rights reserved.</p>
                        </div>
                        <!--/ footer-->
                     </div>
                     <!-- / inside-wrapper -->
                     <!-- Go To Top Link -->
                     <div class="page-scroll">
                        <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
                     </div>
                     <!--/page-scroll-->
                  </footer>
                  <!-- / footer-->
               </div>
               <!-- / content-box -->
            </div>
            <!-- /content-wrapper -->
         </div>
         <!-- /content -->
      </div>
      <!-- /container-fluid -->
      <!-- Bootstrap core & Jquery -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <!-- Custom Js -->
      <script src="js/custom.js"></script>
      <script src="js/plugins.js"></script>
      <!-- number counter script -->
      <script src="js/counter.js"></script>
      <!-- GreenSock -->
      <script src="vendor/layerslider/js/greensock.js"></script>
      <!-- LayerSlider script files -->
      <script src="vendor/layerslider/js/layerslider.transitions.js"></script>
      <script src="vendor/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
      <script src="vendor/layerslider/js/layerslider.load.js"></script>
   </body>
</html>