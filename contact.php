<?php
include './header.php';
?>
		 <!-- ===== content starts  ===== -->
         <div id="content" class="col-md-10 split">
            <!--content-wrapper  -->
            <div class="content-wrapper">
               <!--divider-top  -->
               <div class="divider-top">
                  <!--header-info  -->
                  <div class="header-info col-md-12">
                     <!--inside-wrapper  -->
                     <div class="inside-wrapper container">
                        <!-- Heading -->
                        <h1>Contact</h1>
                        <!-- Breadcrumb -->
                        <ul class="breadcrumb">
                           <li><a href="index.html">Home</a></li>
                           <li class="active">Contact</li>
                        </ul>
                        <!--/Breadcrumb -->
                     </div>
                     <!--/inside-wrapper  -->
                  </div>
                  <!--/header-info  -->
                  <!-- image gradient overlay-->
                  <div class="gradient-overlay"></div>
               </div>
               <!-- /divider-top -->
               <div class="content-box container">
                  <!-- ===== section starts  ===== -->
                  <section class="inside-page">
                     <div class="inside-wrapper container">
                        <h2>Get in Touch with us</h2>
                        <p>We believe that Parriez Handcrafted Gourmet Chocolates bring, charm, grace and happiness to all those personal moments in life when you celebrate with your friends and family.</p>
                        <p>We can execute large orders while retaining the charm of personalized touch. On your request we would arrange to deliver the chocolates to your friends and associates anywhere within the country. Please allow us 2 weeks to plan and execute large orders if the quantity exceeds 100 boxes.</p>
                        <div class="row contact-boxes text-center margin1">
                           <div class="col-md-4">
                              <div class="box-hover icon p-2">
                                 <!---icon-->
                                 <i class="fa fa-envelope small-icon"></i>
                                 <!-- contact-icon info-->
                                 <div class="contact-icon-info">
                                    <h5>Email</h5>
                                    <p>Email address: <a href="mailto:contact@parriez.com">contact@parriez.com</a>
                                    <br />
                                    <a href="mailto:praveengrover24@gmail.com">praveengrover24@gmail.com</a></p>
                                 </div>
                              </div>
                           </div>
                           <!-- /contact-icon-->
                           <div class="col-md-4 res-margin" style="display:none">
                              <div class="box-hover icon p-2">
                                 <!---icon-->
                                 <i class="fa fa-clock small-icon"></i>
                                 <!-- contact-icon info-->
                                 <div class="contact-icon-info">
                                    <h5>Hours</h5>
                                    <p>mon - fri: 9am to 6pm
                                       <br/>Weekends - closed
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <!-- /contact-icon-->
                           <div class="col-md-4 res-margin">
                              <div class="box-hover icon p-2">
                                 <!---icon-->
                                 <i class="fas fa-map-marker-alt small-icon" aria-hidden="false"></i>
                                 <!-- contact-icon info-->
                                 <div class="contact-icon-info">
                                    <h5>Our Location</h5>
                                    <p>Chocolate Studio :<a href="https://goo.gl/maps/gpzEiJ8zMsiGP6ap9">5929, Green Avenue Lane, DLF Phase IV, Gurgaon 122009</a></p>
                                 </div>
                              </div>
                           </div>
                           <!-- /contact-icon-->
                           <div class="col-md-4 res-margin">
                              <div class="box-hover icon p-2">
                                 <!---icon-->
                                 <i class="fas fa-phone-alt small-icon"></i>
                                 <!-- contact-icon info -->
                                 <div class="contact-icon-info">
                                    <h5>Call us</h5>
                                    <p>Tamanna :<a href="tel:+919953359003">+91 9953359003</a>
                                    <p style="margin-bottom: 0rem;">Praveen :<a href="tel:+919810116837">  +91 9810116837</a></p>
                                 </div>
                              </div>
                              <!-- /contact-icon-->
                           </div>
                           <!-- /col-md-4-->
                        </div>
                        <!-- /row contact-boxes-->
                        <div class="row margin1" >
                           <div class="col-md-7 p-1">
                              <!-- contact info -->
                              <div class="contact-info">
                                 <h4 class="title no-margin-top">Write us a Message</h4>
                                 <!-- Form Starts -->
                                 <div id="contact_form">
                                    <div class="form-group">
                                       <!-- row -->
                                       <div class="row">
                                          <div class="col-md-6">
                                             <label>Name<span class="required">*</span></label>
                                             <input type="text" name="name" class="form-control input-field" required=""> 
                                          </div>
                                          <div class="col-md-6">
                                             <label>Email Address <span class="required">*</span></label>
                                             <input type="email" name="email" class="form-control input-field" required=""> 
                                          </div>
                                       </div>
                                       <!-- /row -->
                                       <!-- row -->
                                       <div class="row">
                                          <div class="col-md-12">
                                             <label>Subject</label>
                                             <input type="text" name="subject" class="form-control input-field"> 
                                          </div>
                                          <div class="col-md-12">
                                             <label>Message<span class="required">*</span></label>
                                             <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                                          </div>
                                       </div>
                                       <!-- /row -->
                                       <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary">Send message</button>
                                    </div>
                                    <!-- Contact results -->
                                    <div id="contact_results"></div>
                                 </div>
                                 <!-- /contact-form -->
                              </div>
                              <!-- /contact-info -->
                           </div>
                           <!-- /col-md- -->
                           <div class="col-md-5 p-1">
                              <!-- map-->
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.5772579624804!2d77.08345741507881!3d28.46215728248524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d18db46efe4c3%3A0xd719a9e75ab0e8db!2sGreen%20Ave%2C%20DLF%20Phase%20IV%2C%20Gurugram%2C%20Haryana%20122022!5e0!3m2!1sen!2sin!4v1628071499851!5m2!1sen!2sin" width="100%" height="495" style="border:0px;" allowfullscreen="" loading="lazy"></iframe>
                           </div>
                           <!-- /col-md--->
                        </div>
                        <!-- /row-->
                     </div>
                     <!-- /inside-wrapper-->
                  </section>
<?php
include './footer.php';
?>