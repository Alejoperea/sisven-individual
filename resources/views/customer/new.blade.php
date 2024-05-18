<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Customers</title>
</head>
<body>
    <x-app-layout>
<div class="container">
    <h1 class="text-center">Agregar Customers</h1>
    <form method="POST" action="{{ route('customers.store') }}">
        @csrf
        {{-- <div class="mb-3">
            <label for="id" class="form-label">Id</label>
            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
            <div id="idHelp" class="form-text">Hotel Codigo</div>
        </div> --}}

        <div class="mb-3">
            <label for="document_number" class="form-label">Número de Documento</label>
            <input type="text" required class="form-control" id="document_number" aria-describedby="document_number Help" name="document_number" placeholder="Numero de Documento">
        </div>
        
        <div class="mb-3">
            <label for="first_name" class="form-label">Nombres</label>
            <input type="text" required class="form-control" id="first_name" aria-describedby="first_nameHelp" name="first_name" placeholder="Nombres">
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Apellidos</label>
            <input type="text" required class="form-control" id="last_name" aria-describedby="last_nameHelp" name="last_name" placeholder="Apellidos">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Direccion de Recidencia</label>
            <input type="text" required class="form-control" id="address" aria-describedby="addressHelp" name="address" placeholder="Dirección">
        </div> 

        <div class="mb-3">
            <label for="birthday" class="form-label">Fecha de Nacimiento</label>
            <input type="date" required class="form-control" id="birthday" aria-describedby="birthdayHelp" name="birthday" placeholder="Fecha de Nacimiento">
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Número de Telefono</label>
            <input type="number" required class="form-control" id="phone_number" aria-describedby="phone_numberHelp" name="phone_number" placeholder="Número de Telefono">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" required class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Email">
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('customers.index') }}" class="btn btn-warning">Cancel</a>
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
