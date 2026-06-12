<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $destination->name }} - Images</title>
</head>
<body>
    <h1>Images of {{ $destination->name }}</h1>

    @if ($destination->images->isEmpty())
        <p>No images available for this destination.</p>
    @else
        <div class="images-gallery">
            @foreach ($destination->images as $image)
                <img src="{{ asset('images/' . $image->image_path) }}" alt="{{ $destination->name }}" style="max-width: 200px; margin: 10px;">
            @endforeach
        </div>
    @endif
</body>
</html>
