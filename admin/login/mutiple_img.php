<html lang="en">
<head>
    <title>Project Details</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>
        $(document).ready(function()
        {
        $('form').ajaxForm(function()
        {
        alert("Uploaded SuccessFully");
        });
        });
        function preview_image()
        {
        var total_file=document.getElementById("images").files.length;
        for(var i=0;i<total_file;i++)
        {
        var img = $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' height='300px' width=' 540px'><br><br>");
        $(".btnsave").click(function(){
            $("img").addClass('d_none');
        });
        }
        }
        </script>
        <style>
            .d_none{
                display: none;
            }
        </style>
</head>
<body>
<form>
<div class="container">
    <div class="row ">
        <div class="col-md-6 mx-auto">
            <div class="card mt-5">
                <div class="card-header bg-warning">
                    <h4 class="font-weight-bold">CP Constructions Image Upload</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="img_upload.php" enctype="multipart/form-data">
                         <div class="custom-file">
                            <input type="file" class="custom-file-input" id="images" name="image" onchange="preview_image();" multiple="">
                            <label class="custom-file-label" for="customFile">Choose images</label>
                          </div>
                     <button class="btn btn-success mt-2" type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
                    <div id="image_preview"></div>
        </div>
    </div>
</div>
</forms>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
}); 
</script>
</body>
</html>