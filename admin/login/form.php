<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
	 <meta charset="UTF-8">
     <meta name="viewport">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!--   Latest compiled and minified CSS -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" media="all">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
     <style>
        body {
            background-image: url('back2.JPG');
            background-size: cover;
            min-height: 100%;
            background-repeat: no-repeat;
            position: relative;
        }
        </style>  
        <style>
            .d_none{
                display: none;
            }
        </style>
           
           <style>
            .d_none{
                display: none;
            }
        </style>
<title>Project Details</title>
	<link rel="stylesheet" href="1style.css">
	<script type="text/javascript" lang="javascript" src="./responsiveRegistaration.js"></script>
    </head>
       
    <body>
	<div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="logo">
                            <br><a href="dash1.php">
                                <h2 style="color: white; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">CP Constructions Admin Panel</h2>
                                </a><!-- <img src="img/logo.jpg" alt="Logo"> -->
                        </div>
                    </div>
                   
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
								<a href="dash1.php" class="nav-item nav-link active"> Dashboard</a>
                                <a href="form.php" class="nav-item nav-link active">Add Project</a>
                                <a href="plist.php" class="nav-item nav-link active">Project List</a>
                            </div>
                            </div>
                        </div>
                    </nav>
                </div>
        <h1 align="center" style="font-size:x-large; color: white;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><b><u>Project Details</u></b></h1>
		
		
		<form action="connect.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="align-left">
                    <label for="pname">&nbsp;&nbsp;&nbsp;Project Name:</label></div>
                    <div class="align-right"><label  for="Sname">&nbsp;&nbsp;&nbsp;Supervisor's Name:</label>
                </div>
                <div class="align-container-left">
                    <input type="text" id="Pname" name="PName" placeholder="Enter Project Name"  /></div>
                    <div class="align-container-right"><input type="text" id="Sname" name="Sname" placeholder="Enter Supervisor's name"  />
                </div>
            </div>

            <div class="row">
            <div class="align-left">
                    <label for="pname">&nbsp;&nbsp;&nbsp;Estimated Cost:</label></div>
                    <div class="align-right"><label  for="Sname">&nbsp;&nbsp;&nbsp;Date Of Completion:</label>
                </div>
                <div class="align-container-right">
                    <input type="text" id="Ecost" name="ECost" placeholder="Enter Estimated Cost"></div>
                    <div class="align-container-left">
                    <input type="Date" id="doc" name="doc">
                </div>
            </div>
            
            <div class="row">
                <div class="align-left">
                    <label for="address">&nbsp;&nbsp;&nbsp;About Project</label>
                </div>
                <div class="col-90">
                    <textarea name="about" id="about" cols="30" rows="10"></textarea>
                </div>
            </div>
            
			
				<div class="row ">
					<div class="col-md-6.5 mx-auto">
						<div class="card mt-5">
							<div align="center" class="card-header bg-white">
								<h4 class="font-weight-bold">Upload Images</h4>
							</div>
							<div class="card-body">
									 <div class="custom-file">
										<input type="file" class="custom-file-input" id="images" name="images[]" multiple />
										<label class="custom-file-label" for="customFile">Choose images</label>
									  </div>
							</div>
						</div>
							<div class="image" id="image_preview"></div>
                            </div>
                            
  				</div><br>
                <div class="save" align="center">
            <button class="btn btn-success" type="submit" name="save_img"> Submit </button>
            </div>
            <br>
			</div>
			  
	
        </div>  
		</form>
        <script src="assets/js/jquery-3-3-1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/additional-methods.js"></script>
    <script>
        $(document).ready(function(){
            $.validator.addMethod('maxSize', function (value, element, param) {
                return this.optional(element) || (element.files[0].size <= param)
            }, 'File size must be less than {0} KB');

            $('#form-upload').validate({
                /* maxSize value should be provided in kb e.g (1048576 * 1) for 1MB */
                rules: {
                    "images[]": { required: true,  accept:"image/jpeg,image/png", maxSize: 1048576}
                },
                messages: {
                    "images[]": {
                        required: 'No file has been chosen yet.',
                        accept: 'Please upload .png or .jpg or .jpeg format',
                        maxSize: `Image size cannot be greater than {0} KB.`
                    }
                },
                onblur: "true",
                onfocus: "true",
                errorClass: "help-block",
                errorElement: "strong",
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                unhighlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                },
                errorPlacement: function (error, element) {
                    if (element.parent('input-group').length) {
                        error.insertAfter(element.parent())
                        return false
                    } else {
                        error.insertAfter(element)
                        return false
                    }
                }
            });

            var fileArr = [];
            $("#images").change(function () {
                // check if fileArr length is greater than 0
                if (fileArr.length > 0) fileArr = [];

                $('#image_preview').html("");
                var total_file = document.getElementById("images").files;

                var i;
                if (!total_file.length) return;
                for (i = 0; i < total_file.length; i++) {
                    if (total_file[i].size > 1048576) {
                        document.querySelector('#submit-btn').setAttribute('disabled', true);
                        return false;
                    } else {
                        fileArr.push(total_file[i]);
                        $('#image_preview').append("<div class='img-div' id='img-div" + i + "'><img src='" + URL.createObjectURL(event.target.files[i]) + "' class='img-responsive image img-thumbnail'><div class='middle'><button id='action-icon' value='img-div" + i + "' class='btn btn-danger' role='" + total_file[i].name + "' ><i class='glyphicon glyphicon-trash'></i></button></div></div>");

                        $('#submit-btn').prop('disabled', false);
                    }
                }
            });

            $('body').on('click', '#action-icon', function (evt) {
                var divName = this.value;
                var fileName = $(this).attr('role');
                var total_file = fileArr;

                for (var i = 0; i < fileArr.length; i++) {
                    if (fileArr[i].name === fileName) {
                        fileArr.splice(i, 1);
                    }
                }

                document.getElementById('images').files = FileListItem(fileArr);
                $(`#${divName}`).remove();
                evt.preventDefault();
            })
        })

        function FileListItem(file) {
            file = [].slice.call(Array.isArray(file) ? file : arguments)
            for (var c, b = c = file.length, d = !0; b-- && d;) d = file[b] instanceof File
            if (!d) throw new TypeError("expected argument to FileList is File or array of File objects")
            for (b = (new ClipboardEvent("")).clipboardData || new DataTransfer; c--;) b.items.add(file[c])
            return b.files
        }
    </script>
		
    </body>
</html>