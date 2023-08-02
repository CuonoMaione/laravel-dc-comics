

@extends('layouts.app')

@section('title', 'Home')

@section('main-content') 
  <div class="p-5"><a class="btn btn-sm btn-primary text-end" href=" {{ route('admin.create') }} "> Create new item </a></div>
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
                <td class="d-flex gap-1">
                    <a class="btn btn-sm btn-primary" href=" {{ route('admin.show' , $comic->id) }} "> VIEW </a>
                    <a class="btn btn-sm btn-warning" href=" {{ route('admin.edit' , $comic->id) }} "> EDIT </a>
                    <form action="{{ route('admin.destroy', ['id' => $comic->id]) }}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <a class="btn btn-danger" type="submit">DELETE</a>
                    </form>
                </td>
                
            </tr>
        @endforeach
        </tbody>
    </table>

    @endsection