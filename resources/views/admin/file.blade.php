<div class="rounded">
    @if($getRecord()->file)
    @php
        $path = explode('/', $getRecord()->file);
        $folder = $path[0];
        $filename = $path[1];
    @endphp
    <iframe src="{{ route('pdf.show', ['folder' => $folder, 'filename' => $filename]) }}" type="application/pdf" width="100%" height="1080px"></iframe>
    @endif
</div>