<?php
$pages = array(
    'index.php' => 'Home',
    'services.php' => 'Our Services',
    'aboutus.php' => 'About',
    'gallery.php' => 'Gallery',
    'menu.php' => 'Menu',
    'order.php' => 'How to Order',
    'blog.php' => 'Blog',
    'contact.php' => 'Contact',
) ;

$currentPage = basename($_SERVER['REQUEST_URI']) ;
?>
<!-- footer -->
<style>
.loader-circle {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  margin:auto;
  left:0;
  right:0;
  top:0;
  bottom:0;
  position:fixed;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}
</style>               
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
                              <a href="mailto:contact@parriez.com" title=""><i class="fas fa-envelope"></i></a>
                              <a href="https://api.whatsapp.com/send?phone=+919953359003" target="_blank" title=""><i class="fab fa-whatsapp"></i></a>
                              <a href="https://twitter.com/ParriezChocola1" target="_blank" title=""><i class="fab fa-twitter"></i></a>
                              <a href="https://www.facebook.com/parriez/" target="_blank" title=""><i class="fab fa-facebook"></i></a>
                              <a href="https://www.instagram.com/parriez_chocolates/" target="_blank" title=""><i class="fab fa-instagram"></i></a>
                           </div>
                           <!-- /brand -->
                        </div>
                        <div class="col-md-12 text-center">
                           <p class="copy">Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="http://parriez.com">Parriez Choccasions</a>. All rights reserved.Powered by <a href="https://occedusoft.com/">OCC Edusoft</a>.</p>
                        </div>
                        <!--/ footer-->
                     </div>
                     <!-- / inside-wrapper -->
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

     
         <ul>
            <li class="page-scroll">
               <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=+919953359003" class="float" target="_blank"><i class="fab fa-whatsapp"style="font-size:24px"></i></a></li>
            <li><a href="tel:+919953359003" class="float" style="position:fixed;width:35px;height:35px;bottom:128px;right:19px;background-color:blue;color:#FFF;border-radius:50px;text-align:center;font-size:22px;box-shadow: 2px 2px 3px #999;z-index:100;"><i class="fas fa-phone-alt  my-float"style="color: white;margin-left:1px; margin-bottom:20px !important;font-size: 20px;"></i></a></li>
         </ul>
      
      <!--/page-scroll-->
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
      <script src="./Dashboard/plugins/sweetalert2/sweetalert2.all.min.js"></script>
      <script>
    function loader(){
        
        jQuery.blockUI({
            message: '<div class="loader-circle"></div>',
            overlayCSS: {
                backgroundColor: '#000',
                opacity: 0.7,
                cursor: 'wait'
            },
            css: {
                color: '#333',
                border: 0,
                padding: 0,
                backgroundColor: 'transparent'
            },
        });
    
    }     
   $("#faqform").on('submit',function(e){

        loader();
        // console.log('hii');
        $.ajax({
            url: './Dashboard/backend/data.php',
            type: 'POST',
            dataType: 'json',
            data: {
                type: "uploadfaqs",
                question: $("#question").val()
            },
            success: function(data) {
                $.unblockUI();
                
                if(data['success'] == 1){
                    // console.log('data uploded successfully!');
                    Swal.fire(
                      'Success',
                      'Question posted successfully!',
                      'success'
                    ).then(function(){
                location.reload();
            });
                }
                else{
                  Swal.fire(
                      'Error',
                      'Something went wrong please try again!',
                      'error'
                    ).then(function(){
                location.reload();
            });
                }
            },
        });    
        
        return false;
        
    });
</script>

   </body>
</html>