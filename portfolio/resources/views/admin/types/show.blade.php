@extends('layouts.admin')
@section('content')
<h1>Show workflow</h1>

<h1>{{ $type->workflow }}</h1>
<ul>
    @foreach ($type->projects as $project)
    <li>{{ $project->name_proj }}</li>
    @endforeach
</ul>
@endsection