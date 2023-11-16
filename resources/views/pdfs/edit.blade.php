@extends('layouts.app')

@section('content')
<h2>Edit PDF</h2>
<form action="{{ route('pdfs.update', $pdf->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $pdf->title }}" required>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">PDF File (Leave blank to keep current file)</label>
        <input type="file" class="form-control" id="file" name="file" accept=".pdf">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
