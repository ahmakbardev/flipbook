@extends('layouts.app')

@section('content')
<a href="{{ route('pdfs.create') }}" class="btn btn-primary mb-3">Upload New PDF</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>File</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pdfs as $pdf)
        <tr>
            <td>{{ $pdf->title }}</td>
            <td><a href="{{ Storage::url($pdf->file_path) }}" target="_blank">View PDF</a></td>
            <td>
                <a href="{{ route('pdfs.edit', $pdf->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('pdfs.destroy', $pdf->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
