@extends('layouts.app')

@section('content')
<h2>Upload PDF</h2>
<form action="{{ route('pdfs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">PDF File</label>
        <input type="file" class="form-control" id="file" name="file" accept=".pdf" required onchange="previewPDF()">
        <canvas id="pdf-canvas" style="border:1px solid black; margin-top: 20px; display: none;"></canvas>
        <input type="hidden" id="pdf-cover" name="pdf-cover">

    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>

<script>
    function previewPDF() {
        const fileInput = document.getElementById('file');
        const canvas = document.getElementById('pdf-canvas');
        const pdfCover = document.getElementById('pdf-cover');

        if (fileInput.files.length === 0) {
            return;
        }

        const file = fileInput.files[0];
        const fileReader = new FileReader();

        fileReader.onload = function(event) {
            const typedArray = new Uint8Array(event.target.result);

            pdfjsLib.getDocument({data: typedArray}).promise.then(function(pdf) {
                pdf.getPage(1).then(function(page) {
                    const scale = 1;
                    const viewport = page.getViewport({ scale: scale });
                    const context = canvas.getContext('2d');

                    canvas.height = viewport.height;
                    canvas.width = viewport.width;
                    canvas.style.display = 'block';

                    const renderContext = {
                        canvasContext: context,
                        viewport: viewport,
                    };
                    page.render(renderContext).then(function() {
                        pdfCover.value = canvas.toDataURL("image/jpeg");
                    });
                });
            });
        };

        fileReader.readAsArrayBuffer(file);
    }
</script>

@endsection
