
		<!-- Start Content -->
		<div id="content">
			<div class="container">
            
            	<div class="row">
                
                	<div class="col-md-8">
                      
                        <!-- Classic Heading -->
                    	<h4 class="classic-title"><span>Form Pendaftaran</span></h4>
                      
                        <!-- Start Contact Form -->
                    	<div id="contact-form" class="contatct-form">
                            <div class="loader"></div>
                    		<form action="daftar.php" class="contactForm" name="cform" method="post" autocomplete="off" enctype="multipart/form-data">
                            	<div class="row">
                                	<div >
                                    	<label for="name">Name<span class="required">*</span></label>
                                        <span class="name-missing">Please enter your name</span>  
                                        <input id="name" name="name" type="text" value="" size="30" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div >
                                        <label for="nim">NIM<span class="required">*</span></label>
                                        <span class="name-missing">Please enter your NIM</span>  
                                        <input id="nim" name="nim" type="text" value="" size="30" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div >
                                    	<label for="email">Email<span class="required">*</span></label>
                                        <span class="email-missing">Please enter a valid e-mail</span> 
                                        <input id="e-mail" name="email" type="email" value="" size="30" required>
                                    </div>
                                </div>
                                <div class="row">
                                     <div >
                                        <label for="phone">Phone<span class="required">*</span></label>
                                        <span class="email-missing">Please enter a valid number</span> 
                                        <input id="phone" name="phone" type="text" value="" size="30" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div >
                                        	<label for="kel">Kelompok</label><br>
                                            <!--input id="url" name="url" type="text" value="" size="30"-->
                                            <select id="kel" name="kel"  >
                                                <option value="1">Study Group</option>
                                                <option value="2">Research Group</option>
                                            </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                     <div>
                                            <label for="fileToUpload">CV with photo 4x6, Essay, & Motivational Letter </label>
                                            <p>Select file (*.zip) to upload:</p> 
                                            <input type="file" id="myFile" name="fileToUpload" id="fileToUpload" required>
                                    </div>
                                </div><br>
                                <div class="row">
                                	<div>
                                    	<!--label for="message">Add Your Comment<span class="required">*</span></label>
                                        <textarea id="message" name="message" cols="45" rows="10" required></textarea-->
                                        <input type="submit" name="submit" class="button" id="submit_btn" value="Daftar">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Contact Form -->
                      <script>
                        function myFunction() {
                            var x = document.getElementById("myFile").required;
                            //document.getElementById("demo").innerHTML = x;
                        }
                        </script>
                    </div>
                    
                    <div class="col-md-4">
                        
                        <!-- Classic Heading -->
                    	<h4 class="classic-title"><span>Information</span></h4>
                        
                        <!-- Some Info -->
                        <p>Software Engineering Laboratory Telkom University</p>
                        
                        <!-- Divider -->
                        <div class="hr1" style="margin-bottom:10px;"></div>
                      
                        <!-- Info - Icons List -->
                        <ul class="icons-list">
                        	<li><i class="icon-location-1"></i> <strong>Address:</strong> F201</li>
                        	<li><i class="icon-mail-1"></i> <strong>Email:</strong> rpl-info@telkomuniversity.ac.id</li>
                            <!--li><i class="icon-mobile-1"></i> <strong>Phone:</strong> +62 21 3909795</li-->
                        </ul>
                      
                        <!-- Divider -->
                        <div class="hr1" style="margin-bottom:15px;"></div>
                      
                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span>Working Hours</span></h4>
                      
                        <!-- Info - List -->
                        <ul class="list-unstyled">
                        	<li><i class="icon icon-time"></i> <strong>24 / 7</strong></li>
                            <!-- <li><i class="icon icon-time"></i> <strong>Saturday</strong> - 9am to 2pm</li> 
                            <li><i class="icon icon-time"></i> <strong>Saturday-Sunday</strong> - Closed</li>-->
						</ul>
                      
                    </div>
                  
                </div>
         
			</div>
		</div>
		<!-- End content -->
