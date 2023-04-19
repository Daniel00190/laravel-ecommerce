@include('nav')

<!DOCTYPE html>
<html>

<head>
	<title>Product Page</title>
	<link rel="stylesheet" href="{{ asset('css/shop.css') }}">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>


	<div class="category_selection">

		<form action="/shop" method="GET">
			<div class="form-group">
				<label for="gender">Gender</label>
				<select name="gender" id="gender" class="form-control">
					<option value="">All</option>
					<option value="men" {{ old('gender') == 'men' ? 'selected' : '' }}>Men</option>
					<option value="women" {{ old('gender') == 'women' ? 'selected' : '' }}>Women</option>
				</select>
			</div>
			<div class="form-group">
				<label for="category_id">Category</label>
				<select name="category_id" id="category_id" class="form-control">
					<option value="">All</option>
					@foreach ($categories as $category)
					<option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="min_price">Minimum Price</label>
				<select name="min_price" id="min_price" class="form-control">
					<option value="">Any</option>
					<option value="0" {{ old('min_price') == '0' ? 'selected' : '' }}>0</option>
					<option value="10" {{ old('min_price') == '10' ? 'selected' : '' }}>10</option>
					<option value="25" {{ old('min_price') == '25' ? 'selected' : '' }}>25</option>
					<option value="50" {{ old('min_price') == '50' ? 'selected' : '' }}>50</option>
				</select>
			</div>
			<div class="form-group">
				<label for="max_price">Maximum Price</label>
				<select name="max_price" id="max_price" class="form-control">
					<option value="">Any</option>
					<option value="10" {{ old('max_price') == '10' ? 'selected' : '' }}>10</option>
					<option value="25" {{ old('max_price') == '25' ? 'selected' : '' }}>25</option>
					<option value="50" {{ old('max_price') == '50' ? 'selected' : '' }}>50</option>
					<option value="100" {{ old('max_price') == '100' ? 'selected' : '' }}>100</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Filter</button>
		</form>


	</div>
	<div class="container">
		@foreach($products as $product)
		<div class="product">
			<!-- <img src="{{ $product->image }}" alt="{{ $product->name }}"> -->
			@if($product->gender == 'women')
			<img src="{{ asset('uploads/women.jpg') }}" alt="My Image">
			@elseif($product->gender == 'men')
			<img src="{{ asset('uploads/men-shoes.jpg') }}" alt="My Image">
			@endif
			<h2>{{$product->gender}} - {{ $product->name }}</h2>
			@if($product->category)
			<div class="category">{{ $product->category->name }}</div>
			@endif
			<p>{{ $product->description }}</p>
			<!-- <p>{{ $product->category_id }}</p> -->

			<div class="price">
				${{ $product->price }}
			</div>

			<form action="/cart" method="POST" class="card_form">
				@csrf
				<div class="quantity">
					<label for="size">Size</label>
					<select id="size" name="size">
						<option value="5">5</option>
						<option value="5.5">5.5</option>
						<option value="6">6</option>
						<option value="6.5">6.5</option>
						<option value="7">7</option>
						<option value="7.5">7.5</option>
						<option value="8">8</option>
						<option value="8.5">8.5</option>
						<option value="9">9</option>
						<option value="9.5">9.5</option>
						<option value="10">10</option>
						<option value="10.5">10.5</option>
						<option value="11">11</option>
					</select>
				</div>
				<div class="quantity">
					<label for="quantity">Quantity:</label>
					<input type="number" id="quantity" name="quantity" value="1">
				</div>
				@if (auth()->check())
				<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
				<input type="hidden" name="product_id" value="{{ $product->id }}">
				<button type="submit">Add to Cart</button>
				@else
				<p style="margin-top: 2rem;">Please log in to add items <br /> to your cart.</p>
				@endif
			</form>
		</div>
		@endforeach
	</div>
</body>

</html>