<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @stack('styles')
    <title>Gallery</title>
</head>
<body>
{{-- <p>Gallery</p> --}}
@include('layout.navigation')
<section id="gallery">
    <h2 style="padding-bottom: 7px;border-bottom:solid">Gallery</h2>
    <br>
    <div class="gallery-image">
        <img src="Images/2022.jpg" alt="Image 1" style="width:100%;height:100%;">
    </div>
    <div class="gallery-image">
        <img src="Images/2037.jpg" alt="Image 2" style="width:100%;height:100%">
    </div>
    <!-- Add more images as needed -->
    <div class="gallery-image">
        <img src="Images/2722.jpeg" alt="Image 3" style="width:100%;height:100%">
    </div>
    <div class="gallery-image">
        <img src="Images/2734.jpg" alt="Image 4" style="width:100%;height:100%">
    </div>
    <div class="gallery-image">
        <img src="Images/3565.jpg" alt="Image 5" style="width:100%;height:100%">
    </div>
</section>
@include('layout.footer');

</body>
</html>
