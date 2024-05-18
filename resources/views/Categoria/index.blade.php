<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Categorias</title>
  </head>
  <body>
    <x-app-layout>
    <div class="container">
    <h1>Listado de Categorias</h1>
    <a href="{{ route('categorias.create') }}" class="btn btn-success"> Add Categoria </a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
          <tr>
            <th scope="row">{{ $categoria->id}}</th>
            <td>{{ $categoria->name}}</td>
            <td>{{ $categoria->description}}</td>
            <td>
              <a href="{{ route('categorias.edit', ['categoria' =>$categoria->id]) }}"
                class="btn btn-info"> Edit </a>
              <form action="{{route ('categorias.destroy', ['categoria' => $categoria->id]) }}"
                method='POST' style="display: inline-block">
                @method('delete')
                @csrf
                <input class="btn btn-danger" type="Submit" value="Delete">
              </form>
            </td>
         </tr>
         @endforeach
    </tbody>
      </table>
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