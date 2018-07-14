@extends('main')

@section('content')

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>My Cart - DaryBrothers</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/js/myCart.js"></script>

	<style>
	html, body, #text-container {
        height: 100%;
    }

	.card {
		margin-top: 20px;
		background: #eee;
		padding: 1em;
		line-height: 1.5em; }

	#text-container {
		display: flex;
		align-items: center;
		justify-content: center;
	}
	</style>

	<script type="text/javascript">

		$(document).ready(function() {
			$('#btnSubmitYourOrder').click(function() {
				orderProducts();
			});
		});

		function startEditQuantity(id) {
			$('#qtyDisplayer' + id).css('display', 'none');
			$('#qtyEditor' + id).show();
		}

		function cancelEditQuantity(id) {
			$('#qtyDisplayer' + id).show();
			$('#qtyDisplayer' + id).css('display', 'inline-flex');
			$('#qtyEditor' + id).css('display', 'none');
		}
	</script>
</head>
<body>
	@if (empty($cartProducts))
	<div class="container" id="text-container">
		
		<h2>The Cart is Empty</h2>
	</div>
	@else
	<div class="container">
		@foreach ($cartProducts as $pro)
			<div class="card" id="cart-id{{ $pro->id }}">
			<div class="card-body">
				<div class="col-md-4">
					@if(count($pro->pro_images()) == 1)
						<img src="{{ $pro->pro_images()[0] }}" alt="{{ $pro->title }}" style="max-width: 100%;" />
					@else
					<div id="carousel-product-images" class="carousel slide" data-ride="carousel" data-interval="false">
						<ol class="carousel-indicators">
							@foreach( $pro->pro_images() as $photo )
							<li data-target="#carousel-product-images" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
							@endforeach
						</ol>
						<div class="carousel-inner">
							@foreach( $pro->pro_images() as $photo )
							<div class="carousel-item {{ $loop->first ? 'active' : '' }}" >
								<img class="card-img-top" src="{{ $photo }}" alt="{{ $pro->title }}" />
							</div>
							@endforeach
						</div>
					</div>
					@endif
				</div>
				<div class="col-md-8">
					<h3 class="card-title">{{ $pro->title }}</h3>
					<h5>{{ $pro->pro_price() }}</h5>
					<div>
						<div id="qtyDisplayer{{$pro->id}}" style="display: inline-flex;">
							<h5 id="textQty{{$pro->id}}">{{ $pro->pro_quantity() }}</h5> 
							<a style="margin-left: 10px; color: #337ab7;" class="btn" onclick="startEditQuantity('{{$pro->id}}')"><span class="glyphicon glyphicon-pencil"></span> </a>
						</div>
						<div id="qtyEditor{{$pro->id}}" style="display: none;">
							<input id="quantity{{$pro->id}}" type="number" min="1" placeholder="Input quantity" value="{{$pro->quantity}}" style="text-align: right;" /> <a id="btnDone{{$pro->id}}" class="btn btn-primary" style="color: white;" onclick="editQuantity('{{$pro->id}}')">Done</a> <a class="btn btn-warning" onclick="cancelEditQuantity('{{$pro->id}}')">Cancel</a>
						</div>
					</div>
					<h5>{{ $pro->pro_totalPrice() }}</h5>
					<a class="btn btn-primary" style="color: white;" onclick="removeCartItem('{{ $pro->id }}', 'cart-id{{ $pro->id }}')"><span class="glyphicon glyphicon-trash"></span> Remove</a>
				</div>
			</div>
		</div>
		@endforeach
		<div class="d-flex justify-content-end" style="margin-top: 20px;">
			<a class="btn btn-primary" data-toggle="modal" data-target="#userDetailModal" style="color: white; font-size: 18pt;">ORDER</a>
		</div>
	</div>
	@endif

	<!-- Modal -->
	<div class="modal fade" id="userDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Please fill in your information</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form name="myform" method="POST">
						@csrf

						<div>
							<div class="form-group">
								<label for="myName">First Name *</label>
								<input id="myName" name="myName" class="form-control" type="text" data-validation="required">
								<span id="error_name" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label for="lastname">Last Name *</label>
								<input id="lastname" name="lastname" class="form-control" type="text" data-validation="email">
								<span id="error_lastname" class="text-danger"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="gender">Gender</label>
							<select name="gender" id="gender" class="form-control">
								<option selected>Male</option>
								<option>Female</option>
								<option>Other</option>
							</select>
							<span id="error_gender" class="text-danger"></span>
						</div>
						<div class="form-group">
							<label for="phone">Phone Number *</label>
							<input type="text" id="phone" name="phone" class="form-control" >
							<span id="error_phone" class="text-danger"></span>
						</div>
						<div class="form-group">
							<label for="disc">Address</label>
							<textarea class="form-control" rows="3"></textarea>
						</div>

					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="btnSubmitYourOrder">Submit Your Order</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

@endsection