<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @stack('styles')
    <title>Achievements</title>
</head>
<body>
{{-- <p>Achievements</p> --}}
@include('layout.navigation')
<section class="feature" id="feature">

    <h2 style="padding-bottom: 7px;border-bottom:solid">Achievements:</h2>
    <div class="card-container">
        <div class="card">
        <img src="Images/Arijit_singh_at_GiMA_Awards_2015.jpg" alt="">
        <div class="content">
        <h3 class="title" > National Award</h3>
        <p style="font-size: larger">
            Arijit Singh's National Film Award, one of the highest honors in Indian cinema, stands as a crowning achievement in his illustrious career. The accolade was bestowed upon him in 2014 for the hauntingly beautiful rendition of "Tum Hi Ho" from the film "Aashiqui 2." The song, composed by Mithoon, became an anthem of love, resonating with audiences across the nation. Arijit's soul-stirring performance in "Tum Hi Ho" not only propelled the song to unprecedented heights on music charts but also earned him critical acclaim.

The National Film Award for Best Playback Singer (Male) acknowledged Arijit Singh's exceptional vocal prowess and his ability to infuse raw emotion into his renditions. This prestigious honor solidified his position as a leading playback singer in the Indian music industry. The National Film Awards are known for their discerning recognition of artistic excellence, making Arijit's win a testament to the enduring impact of his contribution to the cinematic landscape.

Arijit Singh's National Award reflects not only his individual achievement but also the collective appreciation for a song that became a cultural phenomenon. It stands as a symbol of his artistic integrity and the profound connection he forges with listeners through his music, marking a pivotal moment in his career and adding a significant chapter to the rich tapestry of Indian music history.
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
            <img src="Images/arijit-singh5.jpg" alt="">
            <div class="content">
            <h3 class="title" > Filmfare Award</h3>
            <p style="font-size: larger">
                Arijit Singh's Filmfare Awards, a prestigious accolade in the realm of Indian cinema, serve as a glittering testament to his exceptional contributions to playback singing. The Filmfare Awards, often considered the epitome of recognition in the Bollywood industry, have celebrated Arijit's talent with multiple wins in the Best Playback Singer (Male) category.

His journey to Filmfare glory began with the haunting melody "Tum Hi Ho" from the film "Aashiqui 2" (2013), composed by Mithoon. Arijit Singh's soulful rendition of the song not only resonated with audiences but also earned him his first Filmfare Award for Best Playback Singer (Male). This award marked a significant milestone in his career, solidifying his status as a prominent and celebrated playback singer in the Indian music scene.

The subsequent years witnessed a virtual sweep of accolades at the Filmfare Awards for Arijit Singh, with notable wins for songs such as "Chahun Main Ya Naa" ("Aashiqui 2"), "Raabta" ("Agent Vinod"), "Channa Mereya" ("Ae Dil Hai Mushkil"), and many more. His ability to convey a myriad of emotions through his voice, coupled with his versatility across genres, has made him a perennial favorite among Filmfare voters and audiences alike.

Arijit Singh's collection of Filmfare Awards stands as a glittering reflection of his enduring impact on the Indian music industry, where his soulful renditions continue to tug at the heartstrings of millions. Each Filmfare trophy symbolizes not just individual victories but the collective acknowledgment of a maestro whose melodies have woven themselves into the very fabric of Bollywood's musical legacy.
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
                <img src="Images/Screenshot 2023-11-15 231316.png" alt="">
                <div class="content">
                <h3 class="title" >IIFA Award</h3>
                <p> The International Indian Film Academy (IIFA) Awards is an annual event that honors excellence in the Hindi film industry. Established in 2000, the IIFA Awards are presented by the International Indian Film Academy to recognize outstanding achievements in Bollywood.
                    .Arijit Singh, the versatile playback singer, has been a prominent recipient of IIFA Awards for his exceptional contributions to the music industry. While specific details may vary each year, Arijit Singh has consistently been recognized in the Best Playback Singer (Male) category.

                    Arijit Singh's wins at the IIFA Awards underscore his impact on the industry and his ability to deliver soul-stirring performances across a range of genres. The IIFA Awards are known for their global reach, as the ceremony is often held in different international locations, attracting a diverse audience and showcasing Bollywood on the international stage.

                    Arijit's victories at the IIFA Awards contribute to his overall recognition and acclaim in the realm of playback singing, solidifying his status as one of the leading and celebrated voices in the Indian music scene. His ability to connect with audiences through his emotive renditions has made him a perennial favorite at award ceremonies like IIFA, where his talent is celebrated on a global platform.
                    He won the Filmfare Award for Best Male Playback Singer for the song "Tum Hi Ho" in 2014. He also won the (IIFA) award in the category of Best Male Singer for the song "Tum Hi Ho" in 2014.
                    It stands as a symbol of his artistic integrity and the profound connection he forges with listeners through his music, marking a pivotal moment in his career and adding a significant chapter to the rich tapestry of Indian music history.
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
    @include('layout.footer');
</body>
</html>
