@extends('layouts.admin')
@section('content')
<h1>Show Post</h1>
<div><span>Nome: </span> <span> {{ $project->name_proj }}</span></div>

@if ($project->type)
<h2>{{ $project->type->workflow }}</h2>
@else
<h2></h2>
@endif
@if (count($project->languages))
@foreach ($project->languages as $language)
<div><span>{{ $language->name }}</span></div>
@endforeach
@endif
<div><span> Difficoltà: {{ $project->lvl_dif }}</span></div>
<div><span>Framework: {{ $project->framework }}</span> </div>
<div><span> Team: {{ $project->team }}</span></div>
@endsection