
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
<link rel="stylesheet" type="text/css" href="css/style_main.css">
<link rel="shortcut icon" href="{!!  $maininfo['favicon'] !!}" type="image/x-icon">
	<title>Admin Panel</title>
</head>
<body>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="main-info-tab" data-toggle="tab" href="#main-info" role="tab" aria-controls="main-info" aria-selected="true">Main Info</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="product-tab" data-toggle="tab" href="#product" role="tab" aria-controls="product" aria-selected="false">Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="service-tab" data-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="false">Service</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" id="carousel-tab" data-toggle="tab" href="#carousel" role="tab" aria-controls="carousel" aria-selected="false">Carousel</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="main-info" role="tabpanel" aria-labelledby="main-info-tab">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <br>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Edit</th>
      <th scope="col">Title</th>
      <th scope="col">Favicon</th>
      <th scope="col">Work Phone</th>
      <th scope="col">Mobile Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Map</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td ><a href="{{ route('edit_info') }}" class="btn btn-outline-info">Edit</a></td>
      <td>{{ $maininfo['title'] }}</td>
      <td><img src=" {{ asset('img/'.$maininfo['favicon']) }}" class="table_img"  alt=""></td>
      <td>{{ $maininfo['workphone'] }}</td>
      <td>{{ $maininfo['mobilephone'] }}</td>
      <td>{{ $maininfo['address'] }}</td>
      <td>{!! $maininfo['map'] !!}</td>
      <td>{{ $maininfo['email'] }}</td>
    </tr>
  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="product" role="tabpanel" aria-labelledby="product-tab">
    <br>
    <p><a href="{{ route('add_product') }}" class="btn btn-outline-success">Add New Product</a></p>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
      <th scope="col">Name</th>
      <th scope="col">Preview</th>
      <th scope="col">Discription</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
 @foreach($products as $key =>$product )
 	<tr>
      <td>
        <form method="POST" action="{{ route('edit_product',['id'=>$product['id']]) }} accept-charset="UTF-8" class="form-horizontal">
          {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      <td><a href="{{ route('edit_product',['id'=>$product['id']]) }}" class="btn btn-outline-info">Edit</a></td>
      <td>{{ $product['name'] }}</td>
      <td>{!! $product['preview'] !!}</td>
      <td>{!! $product['discription'] !!}</td>
      <td><img src="{{ asset('img/'.$product['img']) }}" class="table_img"  alt=""> </td>
    </tr>
 @endforeach
  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
    <br>
    <p><a href="{{ route('add_service') }}" class="btn btn-outline-success">Add New Service</a></p>
  	<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
      <th scope="col">Name</th>
      <th scope="col">Preview</th>
      <th scope="col">Discription</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
@foreach($services as $key => $service)
    <tr>
        <td>
        <form method="POST" action="{{ route('edit_service',['id'=>$service['id']]) }} accept-charset="UTF-8" class="form-horizontal">
          {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      <td><a href="{{ route('edit_service',['id'=>$service['id']]) }}" class="btn btn-outline-info">Edit</a></td>
      <td>{{ $service['name'] }}</td>
      <td>{{ $service['preview'] }}</td>
      <td>{!! $service['discription'] !!}</td>
      <td><img src="{{ asset('img/'.$service['img']) }}" class="table_img"  alt=""></td>
    </tr>
 @endforeach
  </tbody>
</table>
  </div>
    <div class="tab-pane fade" id="carousel" role="tabpanel" aria-labelledby="carousel-tab">
      <br>
      <p><a href="{{ route('add_carousel') }}" class="btn btn-outline-success">Add New Slide</a></p>
  	<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
      <th scope="col">Title</th>
      <th scope="col">Text</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
@foreach($carousels as $key => $carousel)
    <tr>
      <td>
        <form method="POST" action="{{ route('edit_carousel',['id'=>$carousel['id']]) }} accept-charset="UTF-8" class="form-horizontal">
          {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      <td><a href="{{ route('edit_carousel',['id'=>$carousel['id']]) }}" class="btn btn-outline-info">Edit</a></td>
      <td>{{ $carousel['preview'] }}</td>
      <td>{!! $carousel['text'] !!}</td>
      <td><img src=" {{ asset('img/'.$carousel['img']) }} "  class="table_img" alt=""></td>
    </tr>
 @endforeach
  </tbody>
</table>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>