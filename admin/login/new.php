<form action="up.php" method="POST" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="align-left">
                            <label for="pname">&nbsp;&nbsp;&nbsp;Project Name:</label>
                        </div>
                        <div class="align-right">
                            <label for="Sname" >&nbsp;&nbsp;&nbsp;Supervisor's Name:</label>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $res['id'];?>">
                        <div class="align-container-left">
                            <input type="text" value="<?php echo $res['PName'];?>" id="Pname" name="PName" placeholder="Enter Project Name"  />
                        </div>
                        <div class="align-container-right">
                            <input type="text" value="<?php echo $res['SName'];?>" id="Sname" name="SName" placeholder="Enter Supervisor's name"  />
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="align-left">
                            <label for="email">&nbsp;&nbsp;&nbsp;Estimated Cost:</label>
                        </div>
                        <div class="align-right">
                            <label for="dob">&nbsp;&nbsp;&nbsp;Date Of Project Completion:</label>
                        </div>
                        <div class="align-container-left">
                            <input type="text" value="<?php echo $res['ECost'];?>" id="Ecost" name="ECost" placeholder="Enter Estimated Cost"  />
                        </div>
                        <div class="align-container-right">
                            <input type="Date" value="<?php echo $res['doc'];?>" id="doc" name="doc">
                        </div>
                    </div>
                    <div class="row">
                        <div class="align-left">
                            <label for="address">&nbsp;&nbsp;&nbsp;About Project</label>
                        </div>
                        <div class="col-90">
                            <input type="text" name="about" value="<?php echo $res['about'];?>"id="about" size=" 50">
                        </div>
                    </div>`	
                    
                        <div class="row ">
                            <div class="col-md-6.5 mx-auto">
                                <div class="card mt-5">
                                    <div class="card-header bg-white">
                                        <h4 class="font-weight-bold">Upload Images</h4>
                                    </div>
                                    <div class="card-body">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="images" name="uploadedImage[]" onchange="preview_image();" multiple />
                                                <label class="custom-file-label" for="customFile">Choose images</label>
                                            </div>
                                    </div>
                                </div>
                                        <div class="image" id="image_preview"></div>
                            </div>
                        </div>
                        <br>
                    <div class="save" align="center">
                    <button class="btn btn-success" type="submit" name="submit"> Update </button><br>
                    </div>  
            
                </div>  
                </div>
		
		</form>