



    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
            
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
                    <a class="btn btn-sm btn-primary" href=" {{ route('admin.show' , $comic->id) }} "> VIEW </a>
                </td>
                
            </tr>
        @endforeach
        </tbody>
      </table>

</html>