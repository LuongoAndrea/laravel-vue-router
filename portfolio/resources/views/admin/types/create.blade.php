@extends('layouts.admin')
@section('content')
<h1>Create Project</h1>
<div class="row bg-white">
    <div class="col-12">
        <form action="{{ route('admin.types.store') }}" method="POST" enctype="multipart/form-data" class="p-4">
            @csrf
            <div class="mb-3">
                {{-- name_proj --}}
                <label for="workflow" class="form-label">tipo di workflow</label>
                <input type="text" class="form-control @error('workflow') is-invalid @enderror" id="workflow"
                    name="workflow">
                @error('workflow')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

    </div>

    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</div>
</div>
@endsection