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
<link rel="stylesheet" type="text/css" href="{{ asset('css/style_main.css') }}">
<script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>

	<title>Edit Service</title>
</head>
<body>
		<div class="wrapper container-fluid" id="form-wrapper">

<form method="POST" action="{{ route('edit_service',['id'=>$id])  }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
	{{ csrf_field() }}
	    <div class="form-group row justify-content-center">
    	<label for="old_images" class="col-xs-2 control-label">Image now</label>
    	<div class="col-xs-offset-2 col-sm-8">
			<img src="{{ asset('img/'.$service['img']) }} " class="img-circle img-responsive" width="150px" alt="">
			<input name="old_img" type="hidden" value="{{  $service['img'] }}" id="old_images">
    	</div>
    </div>
         <div class="form-group row justify-content-center">
    <div class="custom-file">
		 <input type="file" class="custom-file-input" id="customFile" name="img">
		 <label class="custom-file-label" for="customFile">Choose image</label>
	</div>
	</div>
    <div class="form-group row justify-content-center">
    	<input name="id" type="hidden" value="{{ $service['id'] }}">
	     <div class="col-sm-8">
		 	<input class="form-control" placeholder="Name" name="title" type="text" value="{{ $service['name'] }}" id="name">
		 </div>
    </div>
    <div class="form-group row justify-content-center">
    	<div class="col-sm-8">
		 	<input class="form-control" placeholder="Preview" name="workphone" type="text" value="{{ $service['preview'] }}" id="name">
		 </div>
    </div>
        <div class="form-group row justify-content-center">
    	<div class="col-sm-8">
		 	<textarea id="editor" name="discription">{!! $service['discription'] !!}</textarea>
		 </div>
    </div>
      <div class="form-group row justify-content-center">
	    <div class="col-xs-offset-2 col-sm-8">
	    <div class="back_button_page"> <button class="btn btn-primary" type="submit">Update</button></div>
	    </div>
	  </div>
    
</form>
<script>
            CKEDITOR.replace( 'editor', {
                uiColor: '#14B8C4',
                toolbar: [
                    [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
                    [ 'FontSize', 'TextColor', 'BGColor' ]
                ],
                width:['100%'],height:['300px']

            });

</script>
</body>
</html>