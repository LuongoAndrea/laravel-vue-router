@extends('layouts.admin')
@section('content')
<h1>TIPI DI WORKFLOW</h1>
<a href="{{ route('admin.types.create') }}">Aggiungi un workflow </a>
@if (session()->has('message'))
<div class="alert alert-success mb-3 mt-3">
    {{ session()->get('message') }}
</div>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>

            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($types as $type)
        <tr>
            <th scope="row">{{ $type->id }}</th>
            <td><a href="{{ route('admin.types.show', $type->slug) }}" title="View project">{{ $type->workflow }}</a>
            </td>

            <td><a class="link-secondary" href="{{ route('admin.types.edit', $type->slug) }}" title="Edit project"><i
                        class="fa-solid fa-pen"></i></a></td>
            <td>
                <form action="{{ route('admin.types.destroy', $type->slug) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button btn btn-danger ms-3"
                        data-item-title="{{ $type->workflow }}"> <i class="fa-solid fa-trash-can"></i></button>

                </form>
            </td>
        </tr>
        @endforeach
        </ul>
    </tbody>
</table>
@include('partials.admin.modal')
@endsection