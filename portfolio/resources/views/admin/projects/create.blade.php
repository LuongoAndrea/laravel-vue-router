@extends('layouts.app')
@section('content')
<h1>Create Project</h1>
<div class="row bg-white">
    <div class="col-12">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="p-4">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <textarea class="form-control" id="content" name="content"></textarea>
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">immagine</label>
                <input type="file" name="cover_image" id="cover_image"
                    class="form-control  @error('cover_image') is-invalid @enderror">
                @error('cover_image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- <div class="mb-3">
                <label for="cover_image" class="form-label">Immagine</label>
                <input type="file" name="cover_image" id="cover_image"
                    class="form-control  @error('cover_image') is-invalid @enderror">
                @error('cover_image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div> --}}
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
</div>

@endsection