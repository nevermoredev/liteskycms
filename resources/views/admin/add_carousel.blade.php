<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<meta name=description content="">
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('/css/style_main.css') }}">
<link rel="shortcut icon" href="" type="image/x-icon">
    <script type="text/javascript" src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/js/main.js')  }}"></script>
	<title>Add Slide</title>
</head>

<body>
	<div class="add-wrapper" id="form-wrapper">
<span class="flated_span"><a href="{{ route('admin_panel') }}" class="btn btn-outline-primary" ">Admin Panel</a></span>
		
	<div class="form-group row" id="form">
		 <form action=" {{ route('add_carousel') }}" method="post">
		 	{{ csrf_field() }}
								<div class="form-group">
								   <input type="text" name="preview" class="form-control"  placeholder="Preview">
								</div>
								<div class="custom-file">
								  <input type="file" class="custom-file-input" id="customFile" name="img">
								  <label class="custom-file-label" for="customFile">Choose image</label>
								</div>
								<div class="form-group">
								   <textarea name="text" id="editor"></textarea>
								</div>
								<div class="form-group">
									 <button type="submit" id="send_message" class="btn btn-outline-info">Add Slide</button>
								</div>
								  
								</form>
		<form action="" method="get" accept-charset="utf-8">
				
		</textarea>
		</form>
	</div>

</div>

<script>
	var editor = CKEDITOR.replace('editor',{height: 300 });
    AjexFileManager.init({returnTo: 'ckeditor', editor: editor});
</script>
</body>
</html>