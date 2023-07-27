<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($Comics as $comic)
            <tr>
                <th scope="row">
                    {{ $comic->id }}
                </th>
                <td>
                    {{ $comic->title  }}
                </td>
                <td>
                    {{ $comic->price  }}
                </td>
                <td>
                    {{ $comic->description  }}
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>
</body>
</html>