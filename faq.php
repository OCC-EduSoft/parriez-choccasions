   <section class="inside-page">
      <div class="inside-wrapper container">
         <div class="row">
            <div class="col-md-12">
               <h2 class="text-center">Frequently asked questions</h2>
               <!-- Accordions -->
               <h4>Post your questions below...</h4>
               <div class="row container-fluid">
                  <div class="col-md-12 p-2">
                     <form method="POST" id="faqform">
                        <textarea id="question" rows="3" column="10" name="faqs" class="form-control" placeholder="ask your quesions here.."></textarea>
                        <input type="submit" name="submit" class="btn btn-primary mt-4">
                     </form>
                  </div>
               </div>
               <?php
               include 'connection.php';
               $sql= "SELECT * FROM `faqs`";
               $result=mysqli_query($conn,$sql);
               $i=1;
               while ($row=mysqli_fetch_assoc($result)) {
                  // code...
                  ?>
                  <div class="panel-group" id="accordion">
                  <!-- Question 1 -->
                  <div class="panel mt-4">
                     <div class="panel-heading">
                        <h6 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>"><?php echo $row['question'];?></a>
                        </h6>
                     </div>
                     <!-- /panel-heading -->
                     <div id="collapse<?php echo $i;?>" class="panel-collapse collapse ">
                        <div class="panel-body">
                           <p><?php echo $row['answer'];?></p>
                        </div>
                     </div>
                  </div>
               <?php
               $i=$i+1;
               }
               ?>
               <div class="panel-group" id="accordion" style="display: none;">
                  <!-- Question 1 -->
                  <div class="panel mt-4">
                     <div class="panel-heading">
                        <h6 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse"></a>
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

