
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sisven</title>
  </head>
  <body>
    <x-app-layout>
    <div class="container">
      <h1 class="text-center">PAY MODE</h1>
      <a href="{{ route('paymodes.create') }}" class="btn btn-success">Agregar</a>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name </th>
              <th scope="col">Observation</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($paymodes as $paymode)
                <tr>
                  <th scope="row">{{ $paymode->id }}</th>
                  <td>{{ $paymode->name }}</td>
                  <td>{{ $paymode->observation }}</td>
                  <td>
                    <a href="{{route('paymodes.edit',['paymode' => $paymode->id])}}"
                      class="btn btn-info">Edit</a></li>

                    <form action="{{route('paymodes.destroy',['paymode' =>$paymode->id])}}"
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
