{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Layouts in Blade</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @stack('styles')
</head>
<body>
    @include('layout.header')
    <div class="container">
        <div class="content">
            @yield('appContents')
        </div>
    </div>
    @include('layout.footer')
</body>
</html> --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Famous Personality Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    @include('layout.header')

    <section id="biography">
        <h2>Biography</h2>
        <p id="bio-content">This is where you can provide a brief biography of the famous personality.</p>
    </section>

    <section id="achievements">
        <h2>Achievements</h2>
        <ul id="achievements-list">
            <!-- Dynamic content will be added using JavaScript -->
        </ul>
    </section>

    <section id="gallery">
        <h2>Gallery</h2>
        <div id="image-container" class="image-container">
            <!-- Dynamic images will be added using JavaScript -->
        </div>
    </section>

    <script src="script.js"></script>
    @include('layout.footer')
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Famous Personality Website</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    @stack('styles')
    <style>
        .parallax {
          /* The image used */
          background-image: url("img_parallax.jpg");

          /* Set a specific height */
          min-height: 500px;

          /* Create the parallax scrolling effect */
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
        </style>
</head>
<body>
<div class="parallax">
    @include('layout.header')
    <nav>
        <a href="#Home">Home</a>
        <a href="#biography">About Person</a>
        <a href="#gallery">Gallery</a>
        <a href="#achievements">Achievements</a>

    </nav>

    <section id="biography">
        <h2>Bio</h2>
        <p>This is a brief introduction to the life and achievements of the famous personality. Provide interesting information about their background, career, and contributions.</p>
    </section>

    <section id="achievements">
        <h2>Achievements</h2>
        <ul id="achievements-list">
            <!-- Dynamic content will be added using JavaScript -->
        </ul>
    </section>

    <section id="gallery">
        <h2>Gallery</h2>
        <div class="gallery-image">
            <img src="image1.jpg" alt="Image 1">
        </div>
        <div class="gallery-image">
            <img src="image2.jpg" alt="Image 2">
        </div>
        <!-- Add more images as needed -->
    </section>
    <section class="feature" id="feature">
        <div class="card-container">
            <div class="card">
            <img src="" alt="">
            <div class="content">
            <h3 class="title" >Achievements 1</h3>
            <p> data on Achievements
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <a href="" ><button class="btn"style="
            cursor: pointer;
            transition: width 5s;
            border-radius: .5s;
            align:center;
            width: 60px;
            background-color: #f9f9f9;
            border-radius: 50%; color:#333;

            " >Learn more</button></a>
            </div>
            </div>
                <div class="card">
                <img src="" alt="">
                <div class="content">
                <h3 class="title" >Achievements 2</h3>
                <p> data on Achievements
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

                <a href="" ><button class="btn"style="
                cursor: pointer;
                transition: width 5s;
                border-radius: .5s;
                align:center;
                width: 60px;
                background-color: #f9f9f9;
                border-radius: 50%; color:#333;

                " >Learn more</button></a>
                </div>
                </div>
                    <div class="card">
                    <img src="" alt="">
                    <div class="content">
                    <h3 class="title" >Achievements 3</h3>
                    <p> data on Achievements
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <a href="" ><button class="btn"style="
                    cursor: pointer;
                    transition: width 5s;
                    border-radius: .5s;
                    align:center;
                    width: 60px;
                    background-color: #f9f9f9;
                    border-radius: 50%; color:#333;

                    " >Learn more</button></a>
                    </div>
                    </div>
    </section>
    <hr>
    <section>

        <div style="display: flex;
        align-items: center;
        justify-content: center;
        " class="contact-form-container">
            <form action="">
            <h3>Your Feedback:</h3>
            <div class="inputBox">
                <p><i style="color: red">* </i>Enter your Name:</p>
            <input type="text" placeholder="Full name">
            <p><i style="color: red">* </i>Enter your Email Address:</p>

            <input type="email" placeholder="Email">
            </div>
            <p><i style="color: red">* </i>Your Message</p>
            <div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <br>
            <div>
            <input type="submit" value="Submit">
            </div>
            </form>
            </div>
        <div>
        </section>


        @include('layout.footer')
    </div>
    <style>
        .feature{
min-height: 100vh;
background: #f9f9f9;
}
.feature .card-container{
display: flex;
align-items: center;
justify-content: center;
flex-wrap: wrap;
width: 100%;
}
.feature .card-container .card{
width: 25rem;
margin:2rem;
background: #fff;
border-radius: .5rem;
box-shadow: 0 .3rem .5rem rgba(0,0,0,.3);
overflow: hidden;
position: relative;
}
.feature .card-container .card img{
height:18rem;
width: 100%;
object-fit: cover;
}
.feature .card-container.content{
padding-bottom: 2rem;
text-align: center;
}
.feature .card-container .content .title{
color:#333;
font-size: 3rem;
}
.feature .card-container.content p{
color:#333;
font-size: 1.3rem;
padding:1rem;
}

/* .feature .card-container.content .btn{
font-size:1.7rem;
margin-top: 1.4rem;
height:3.5rem;
width:12rem;
border-radius: .5rem;
outline: none;
border:none;
background: #0098a1;
color: #fff;
cursor: pointer;
transition: .2s linear;
display: flex;
    align-items: center;
    justify-content: center;
} */
/* .feature .card-container .content .btn:hover{
background: none;
border: 2rem solid #0098a1;
color:#0098a1;
} */
/* .feature .card-container .card .discount{
position: absolute;
top:1rem; left: 1rem;
display: block;
height:3.5rem;
width:6rem;
background: #ff3300;
color:#fff;
line-height: 4rem;
text-align: center;
font-size: 2rem;
} */
    </style>
    </body>
    </html>



