<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Create Users</title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/rotate.css') }}">
	</head>		
	
	<body>
		<div class="container form-top-margin">
			<div class="row">
				<div class="col-md-offset-3 col-md-6">
					{!! Form::open(array('route' => 'store_image', 'class' => 'form','files'=>'true')) !!}
					<label class="btn btn-default">
	    				Upload Rotated Image <input type="file" style="display: none;" name="image" onchange="readURL(this);" >
					</label>
					<div >
			        	<img id="image_placeholder" src="" width="200px" class="rotate180" />
					</div>
					<div class="form-group">
						{!! Form::submit('Submit', 
						array('class'=>'btn btn-primary')) !!}
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</body>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script>

	function readURL(input) {
        var file_name = input.files[0].name;
        var file_size = input.files[0].size;
        var ext = file_name.split('.')[file_name.split('.').length - 1].toLowerCase();
		if(ext != 'jpg' && ext != 'jpeg' && ext != 'JPEG' && ext != 'JPG' && ext != 'png' && ext != 'PNG' && ext != 'gif' && ext != 'GIF' && ext != 'bmp' && ext != 'BMP'){
		 	alert('Please upload valid image file');
		 	document.location.reload(true);
		 }
        else if (file_size > 512000){
           	alert('File Size should be less than 500kb');
		 	document.location.reload(true);
        }
        else {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_placeholder').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
           
        }
    }
	</script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	</html>	