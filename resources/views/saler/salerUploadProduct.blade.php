@extends('saler.saler')

@section('products')
  <div class="col-md-10">
    <form class="upload" action="{{ route('product.upload.submit') }}" method="post" enctype="multipart/form-data">

      @csrf
      <label for="products_name">Products Name: </label>
      <input type="text" name="products_name" id="products_name" required>
      @error('products_name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

      <label for="info">Products Description: </label>
      <input type="text" name="info" id="info" required>
      @error('info')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

      <label for="quantity">Quantity: </label>
      <input type="text" name="quantity" id="quantity" required>
      @error('quantity')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

      <label for="price">Price: </label>
      <input type="text" name="price" id="price" required>
      @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

      <label for="price">Img: </label>
      <input type="file" name="image" id="image" required>
      @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

      <label for="catagory">Catagory: </label>
      <input type="text" name="catagory" id="catagory" required>
      @error('catagory')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

      <button type="submit" name="button">Submit</button>

    </form>
  </div>
@endsection
