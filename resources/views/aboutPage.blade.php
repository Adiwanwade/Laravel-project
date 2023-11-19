<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @stack('styles')

    <title>About Arijit Singh</title>
</head>
<body>

@include('layout.navigation')

<h2 style="display: flex;
align-items: center;
justify-content: center;padding-bottom: 7px;border-bottom:solid">About Arijit Singh</h2>
<div style="display: flex;
align-items: left;
justify-content: left;">

    {{-- <h3>Introduction to Arijit Singh</h3> --}}
    <img src="Images/2734.jpg" alt="Image 4" style="padding: 20px" >
    <p style="font-size: x-large;font-weight:normal;padding:20px;display: flex;
    align-items: right;
    justify-content: right;">
    <pre style="font-size:xx-large;font-weight:normal">
       Arijit Singh is an Indian singer and music composer who has gained immense
popularity in the last few years. He has given his voice to some of the most
iconic songs of the industry. He was born on 25 April 1987 in Jiaganj, Murshidabad,
West Bengal. He started his career as a contestant on the singing reality
show Fame Gurukul in 2005. Since then, he has gone on to become one of the
most sought-after singers in the industry with numerous hits under his belt.

<i style="font-size: xx-large;font-weight:bold">Career Highlights</i>

      Arijit has worked with some of the most renowned music directors such as
Pritam Chakraborty, Ankit Tiwari, Jeet Ganguly and Vishal-Shekhar. He has
also collaborated with Sachin-Jigar for many of his songs. His first big
break was for the song ‘Tum Hi Ho’ from the 2013 movie Aashiqui 2. The
song was an instant hit and went on to become one of the most successful
songs of that year.
      Since then, he has gone on to give us some of the most memorable songs
like ‘Ae Dil Hai Mushkil’, ‘Channa Mereya’, ‘Pachtaoge’,‘Mast Magan’,
‘Phir Bhi Tumko Chaahunga’ and many more.

<i style="font-size: xx-large;font-weight:bold">Awards and Recognition</i>

      Arijit has been nominated for several awards including four Filmfare Awards,
four Screen Awards, six IIFA Awards, two Zee Cine Awards, four Stardust Awards
and four Mirchi Music Awards. He has won three Filmfare Awards, one IIFA Award
and one Zee Cine Award so far. He has also been honored with numerous other
awards such as Big Star Entertainment Award, GIMA Award and Lions Gold Award.

       Arijit Singh is easily one of the most talented singers in India today.
His soothing voice and melodious tunes have enchanted millions of listeners
around the world. His phenomenal success is a testament to his hard work
and dedication to his craft.
</pre>
</p>
</div>
<div>

</div>
@include('layout.footer')

</body>
</html>
