<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Customer</title>
</head>
<body>
<x-app-layout>
<div class="container">
    <h1 class="text-center">Editar Customers</h1>
    <form method="POST" action="{{ route('customers.update',['customer' => $customer->id]) }}">
        @method('put')
        @csrf
        <div class="mb-3">
            {{-- <label for="id" class="form-label">Id</label> --}}
            <input type="hidden" class="form-control" id="id" name="id" value="{{ $customer->id }}" disabled>
            {{-- <div id="idHelp" class="form-text">Código</div> --}} 
        </div>
    
        <div class="mb-3">
            <label for="document_number" class="form-label">Numero de Documento</label>
            <input type="text" required class="form-control" id="document_number" name="document_number" value="{{ $customer->document_number }}" placeholder="Numero de Documento">
        </div>
        
        <div class="mb-3">
            <label for="first_name" class="form-label">Nombres</label>
            <input type="text" required class="form-control" id="first_name" name="first_name" value="{{ $customer->first_name }}" placeholder="Nombres">
        </div>
    
        <div class="mb-3">
            <label for="last_name" class="form-label">Apellidos</label>
            <input type="text" required class="form-control" id="last_name" name="last_name" value="{{ $customer->last_name }}" placeholder="Apellidos">
        </div>
    
        <div class="mb-3">
            <label for="address" class="form-label">Direccion</label>
            <input type="text" required class="form-control" id="address" name="address" value="{{ $customer->address }}" placeholder="Direccion">
        </div> 

        <div class="mb-3">
            <label for="birthday" class="form-label">Fecha de Nacimiento</label>
            <input type="date" required class="form-control" id="birthday" name="birthday" value="{{ $customer->birthday }}" placeholder="Fecha de Nacimiento">
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Numero de Telefono</label>
            <input type="number" required class="form-control" id="phone_number" name="phone_number" value="{{ $customer->phone_number }}" placeholder="Numero de Telefono">
        </div>

        <div class="mb-3">
            <label for="email" class="email">Email</label>
            <input type="text" required class="form-control" id="email" name="email" value="{{ $customer->email }}" placeholder="Email">
        </div>
    
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('customers.index') }}" class="btn btn-warning">Cancelar</a>
        </div>
    </form>
    
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</x-app-layout>
</body>
</html>
