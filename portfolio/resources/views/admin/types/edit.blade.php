@extends('layouts.admin')

@section('content')
<h1>Edit</h1>
<h1>Modifica Progetto:{{ $type->workflow }}</h1>
<div class="row bg-white">
    <div class="col-12">
        <form action="{{ route('admin.types.update', $type->slug) }}" method="POST" enctype="multipart/form-data"
            class="p-4">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="workflow" class="form-label">nome di workflow</label>
                <input type="text" class="form-control @error('workflow') is-invalid @enderror" id="workflow"
                    name="workflow" value="{{ old('workflow', $type->workflow) }}">
                @error('name_proj')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
    <button class="btn btn-primary"><a href="{{ route('admin.projects.index') }}"
            style="color:white">Indietro</a></button>
    </form>
</div>
</div>
@endsection