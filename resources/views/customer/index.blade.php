
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistema de Customers</title>
  </head>
  <body>
  <x-app-layout>
    <div class="container">
      <h1 class="text-center">Sistema de Customers</h1>
      <a href="{{ route('customers.create') }}" class="btn btn-success">Agregar</a>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Documento</th>
              <th scope="col">Nombres</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Direccion</th>
              <th scope="col">Fecha de Nacimiento</th>
              <th scope="col">Numero de Telefono</th>
              <th scope="col">Email de Contacto</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($customers as $customer)
                <tr>
                  <th scope="row">{{ $customer->id }}</th>
                  <td>{{ $customer->document_number }}</td>
                  <td>{{ $customer->first_name }}</td>
                  <td>{{ $customer->last_name }}</td>
                  <td>{{ $customer->address }}</td>
                  <td>{{ $customer->birthday }}</td>
                  <td>{{ $customer->phone_number }}</td>
                  <td>{{ $customer->email }}</td>
                  
                  <td>

                    <a href="{{route('customers.edit',['customer' => $customer->id])}}"
                        class="btn btn-info">Edit</a></li>

                    <form action="{{route('customers.destroy',['customer' =>$customer->id])}}"
                        method='POST' style="display:inline-block">
                        @method('delete')
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>

                  </td>
                </tr>   
              @endforeach
          </tbody>
        </table>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </x-app-layout>
  </body>
</html>
