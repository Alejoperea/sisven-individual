<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Product</title>
  </head>
  <body>
    <x-app-layout>
    <div class="container">
    <h1>Edit Product</h1>
    <form method="POST" action="{{ route('products.update', ['producto' => $producto->id]) }}">
      @method('put')  
      @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Id</label>
          <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" 
          disabled="disabled" value="{{ $producto->id }}">
          <div id="idHelp" class="form-text"> Product ID</div>
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" required class="form-control" id="name" placeholder="Product Name" 
          name="name" value="{{ $producto->name }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" required class="form-control" id="price" placeholder="Product Price" 
            name="price" value="{{ $producto->price }}">
          </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="text" required class="form-control" id="stock" placeholder="Product Stock" 
            name="stock" value="{{ $producto->stock }}">
          </div>

          <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" id="category_id" name="category_id" required>
                <option selected disabled value="">Select Category</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $categoria->id == $producto->category_id ? 'selected' : '' }}>{{ $categoria->name }}</option>
                @endforeach
            </select>
        </div>
       
        <div class="mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-warning">Cancel</a>
        </div>
      </form>
    </div>

</x-app-layout>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
