<!DOCTYPE html>
<html>

<head>
	<title>Cart Page</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">


	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
	@include('nav')

	<main>
	@if($orders->count() > 0)
		<h1>Hurry, before they sell!!</h1>
		<section class="cart-section">
			<h2>Your Cart</h2>
			
			@foreach($orders as $order)
			<div class="cart-item">
				<div class="cart-image">
					@if($order->product_gender == 'women')
					<img src="{{ asset('uploads/women.jpg') }}" alt="My Image">
					@elseif($order->product_gender == 'men')
					<img src="{{ asset('uploads/men-shoes.jpg') }}" alt="My Image">
					@endif
				</div>
				<div class="cart-details">
					<h3>{{ $order->product_name }}</h3>
					<p class="product-description">{{ $order->product_description }}</p>
					<div class="product-details">
						<p class="product-gender">{{ $order->product_gender }}</p>
						<p class="product-quantity">quantity: {{ $order->quantity }}</p>
						<p class="product-quantity">size: {{ $order->size }}</p>
						<p class="product-price">${{ $order->product_price }}</p>
						<form action="{{ route('delete', ['id' => $order->id]) }}" method="POST">

							@csrf

							<button type="submit">Delete</button>
						</form>
					</div>
				</div>
			</div>
			@endforeach



			<div class="total-price">
				<p>Total Price: {{$order->total_price_in_cart}}</p>
				<button>CHECKOUT</button>
			</div>
			@else
			<h1>Your cart is empty<a href="/shop"></br> Shopping</a></h1>
			
			@endif
		</section>
	</main>

</body>

</html>