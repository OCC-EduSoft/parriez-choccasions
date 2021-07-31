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
                        <h1>Blog</h1>
                        <!-- Breadcrumb -->
                        <ul class="breadcrumb">
                           <li><a href="index.html">Home</a></li>
                           <li><a href="blog.html">Blog Home</a></li>
                           <li class="active">Blog Post</li>
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
                        <!-- Blog page -->
                        <div id="blog-container" class="col-md-8">
                           <h2>The best Birthday cakes ideas</h2>
                           <!-- Post Info -->
                           <div class="post-info">
                              <p><i class="fa fa-clock-o"></i>Posted on Aug 24, 2018 at 9:00 PM</p>
                              <p><i class="fa fa-user"></i>by <a href="#">John Doe</a></p>
                              <!-- Post Comments -->
                              <p><i class="fa fa-comment"></i>3 Comments</p>
                           </div>
                           <!-- post-info -->
                           <div class="blog-single post-main">
                              <!-- Image -->
                              <img class="img-responsive" src="img/blog/blogmain1.jpg" alt="">						 	
                              <!-- Post Content -->
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis tincidunt rhoncus. Integer pulvinar elit ligula, laoreet imperdiet magna consectetur vel. Nullam tempus, tellus sed laoreet porttitor, urna quam efficitur magna, id vestibulum arcu massa eget risus. Mauris sagittis elit nec magna congue aliquam. Nam sollicitudin urna nunc, eu iaculis leo vulputate vel. Donec ultrices ipsum laoreet suscipit consectetur. In pulvinar diam arcu, eu tincidunt arcu mollis quis. Sed vulputate pharetra enim ac pretium. Quisque at rutrum nunc, nec dictum ligula. Vestibulum magna nibh, dapibus at eros et, auctor sagittis ipsum.</p>
                              <blockquote>Men dolor sit amet, consectetur adipisiras sit amet nibh libero, in gravida nulla ulla vel metus scelerisque ante sollicitudin commodo cras purus.</blockquote>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis tincidunt rhoncus. Integer pulvinar elit ligula, laoreet imperdiet magna consectetur vel. Nullam tempus, tellus sed laoreet porttitor, urna quam efficitur magna, id vestibulum arcu massa eget risus. Mauris sagittis elit nec magna congue aliquam. Nam sollicitudin urna nunc, eu iaculis leo vulputate vel. Donec ultrices ipsum laoreet suscipit consectetur. In pulvinar diam arcu, eu tincidunt arcu mollis quis. Sed vulputate pharetra enim ac pretium. Quisque at rutrum nunc, nec dictum ligula. Vestibulum magna nibh, dapibus at eros et, auctor sagittis ipsum.</p>
                              <div class="post-info">
                                 <!-- Tags -->
                                 <div class="blog-tags">
                                    <p><i class="fa fa-tags"></i>Tags:</p>
                                    <a href="#">Cakes</a>
                                    <a href="#">Pies</a>
                                 </div>
                              </div>
                              <!-- /post-info -->
                           </div>
                           <!-- /blog-single -->	
                           <!-- Comments Form -->
                           <div class="row">
                              <div class="col-md-8 col-centered">
                                 <div class="media comment-form">
                                    <h5>Leave a Comment:</h5>
                                    <!-- Form Starts -->
                                    <div class="form-group ">
                                       <label>Name<span class="required">*</span></label>
                                       <input type="text" name="name" class="form-control input-field" required="">                    
                                       <label>Email Adress <span class="required">*</span></label>
                                       <input type="email" name="email" class="form-control input-field" required="">           
                                       <label>Comment<span class="required">*</span></label>
                                       <textarea name="comment" id="comment" class="textarea-field form-control" rows="3"  required=""></textarea>
                                    </div>
                                    <!--  Button -->
                                    <button type="submit" id="comment_btn" value="Submit" class="btn btn-primary">Send Comment</button>
                                 </div>
                              </div>
                              <!-- /col-md-7 -->
                           </div>
                           <!-- /row -->
                           <!-- Posted Comments -->
                           <div class="comments-block">
                              <hr>
                              <h3 class="text-center">Comments</h3>
                              <!-- Comment -->
                              <div class="comment media">
                                 <a href="#">
                                 <img class="media-object  img-responsive img-circle" src="img/blog/comment1.jpg" alt="">
                                 </a>
                                 <div class="media-body">
                                    <h6 class="media-heading">  <a href="#">Maria Silva </a>
                                       <small>August 25, 2018 at 9:30 PM</small>
                                    </h6>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <!-- Reply Button -->
                                    <a class="btn btn-sm text-right">Reply</a>
                                 </div>
                              </div>
                              <!-- /media -->
                              <!-- Comment -->
                              <div class="comment media">
                                 <a href="#">
                                 <img class="media-object  img-responsive img-circle" src="img/blog/comment2.jpg" alt="">
                                 </a>
                                 <div class="media-body">
                                    <h6 class="media-heading">  <a href="#">Jonas Lindberg </a>
                                       <small>August 25, 2018 at 9:30 PM</small>
                                    </h6>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <!-- Reply Button -->
                                    <a class="btn btn-sm text-right">Reply</a>
                                    <!-- Nested Comment -->
                                    <div class="comment media nested">
                                       <a href="#">
                                       <img class="media-object img-responsive img-circle" src="img/blog/comment3.jpg" alt="">
                                       </a>
                                       <div class="media-body">
                                          <h6 class="media-heading"><a href="#">Nested Comment</a>
                                             <small>August 25, 2018 at 9:30 PM</small>
                                          </h6>
                                          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                          </p>
                                          <!-- Reply Button -->
                                          <a class="btn btn-sm text-right">Reply</a>
                                       </div>
                                    </div>
                                    <!-- /media -->
                                    <!-- End Nested Comment -->
                                 </div>
                              </div>
                              <!-- /media -->
                           </div>
                           <!-- /comments block -->
                        </div>
                        <!-- /blog-container col-md-8 -->
                        <!-- Sidebar Column -->
                        <div class="sidebar col-md-4">
                           <!-- Blog Search -->
                           <div class="well">
                              <h5 class="sidebar-header">Search</h5>
                              <div class="form-group">
                                 <div class="input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                 </div>
                                 <!-- /input-group -->
                              </div>
                              <!-- /form-group -->
                           </div>
                           <!-- /well -->
                           <div class="well">
                              <h5 class="sidebar-header">Popular Posts</h5>
                              <div class="row popular-widget">
                                 <ul>
                                    <!-- Popular Post posts 1 -->
                                    <li>
                                       <div class="popular-thumb">
                                          <img class="img-responsive" src="img/blog/blogpopular1.jpg" alt="" />
                                       </div>
                                       <!-- .popular-thumb -->
                                       <div class="popular-content">
                                          <h6><a href="#">Baking charity event next week</a></h6>
                                       </div>
                                       <div class="post-info">
                                          <!-- Post date -->
                                          <p><i class="fa fa-calendar"></i>24 jan 2019</p>
                                          <!-- Post Comments -->
                                          <p><i class="fa fa-comment"></i><a href="#">24 Comments</a></p>
                                       </div>
                                    </li>
                                    <!-- Popular Post posts 2 -->
                                    <li>
                                       <div class="popular-thumb">
                                          <img class="img-responsive" src="img/blog/blogpopular2.jpg" alt="" />
                                       </div>
                                       <!-- .popular-thumb -->
                                       <div class="popular-content">
                                          <h6>
                                             <a href="#">
                                             Order now our new Vegan cakes
                                             </a>
                                          </h6>
                                       </div>
                                       <div class="post-info">
                                          <!-- Post date -->
                                          <p><i class="fa fa-calendar"></i>13 feb 2019</p>
                                          <!-- Post Comments -->
                                          <p><i class="fa fa-comment"></i><a href="#">12 Comments</a></p>
                                       </div>
                                    </li>
                                    <!-- Popular Post posts 3 -->
                                    <li>
                                       <div class="popular-thumb">
                                          <img class="img-responsive" src="img/blog/blogpopular3.jpg" alt="" />
                                       </div>
                                       <!-- .popular-thumb -->
                                       <div class="popular-content">
                                          <h6>
                                             <a href="#">
                                             The best Birthday cakes ideas
                                             </a>
                                          </h6>
                                       </div>
                                       <div class="post-info">
                                          <!-- Post date -->
                                          <p><i class="fa fa-calendar"></i>09 may 2019</p>
                                          <!-- Post Comments -->
                                          <p><i class="fa fa-comment"></i><a href="#">67 Comments</a></p>
                                       </div>
                                    </li>
                                 </ul>
                                 <!-- /ul -->
                              </div>
                              <!-- /row -->
                           </div>
                           <!-- /well -->
                           <!-- About us Widget -->
                           <div class="well">
                              <h5 class="sidebar-header">About Us</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium.</p>
                              <!-- Social Media icons -->
                              <div class="social-media ">
                                 <a href="#" title=""><i class="fab fa-twitter"></i></a>
                                 <a href="#" title=""><i class="fab fa-facebook"></i></a>
                                 <a href="#" title=""><i class="fab fa-google-plus"></i></a>
                                 <a href="#" title=""><i class="fab fa-instagram"></i></a>
                              </div>
                           </div>
                           <!-- /well -->
                           <!-- Blog Categories -->
                           <div class="well">
                              <h5 class="sidebar-header">Categories</h5>
                              <div class="row">
                                 <ul class="custom categories">
                                    <li><a href="#">Our Story</a>
                                    </li>
                                    <li><a href="#">Events and News</a>
                                    </li>
                                    <li><a href="#">Cakes</a>
                                    </li>
                                    <li><a href="#">Pies</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- /well -->
                           <!-- Tags Widget -->
                           <div class="well">
                              <h5 class="sidebar-header">Tags</h5>
                              <div class="blog-tags">
                                 <a href="#">Cakes</a> <a href="#">Cupcakes and Pies</a> <a href="#">Events</a>  <a href="#">Birthdays</a> <a href="#">Workshop</a> <a href="#">Weddings</a>
                              </div>
                           </div>
                           <!-- /well -->
                        </div>
                        <!-- /sidebar -->
                     </div>
                     <!-- /inside-wrapper-->
                  </section>
<?php
include './footer.php';
?>