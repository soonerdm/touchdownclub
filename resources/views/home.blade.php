@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    <style>
        .hero {
            padding: 25px;
            background: url( '../img/players.jpg' );
            background-repeat: no-repeat;
            background-position: center; /* Center the image */
            background-size: cover;
            height: 1100px;
        }


        .slide-in {
            /*width: 100%;*/
            overflow: hidden;
            /*margin-left: 300px; */
            max-width: 500px
        }

        .slide-right h2 {
            animation: 2s slide-right 2s forwards;
            transform:translateX(-100%);
            color: #FFFFFF;
        }

        .slide-right-2 h2 {
            animation: 2s slide-right 2s forwards;
            transform:translateX(-100%);
            color: #FFFFFF;
        }

        .slide-right-3 h2 {
            animation: 2s slide-right 2s forwards;
            transform:translateX(-100%);
            color: #FFFFFF;
        }

        @keyframes slide-right {
            to {
                transform:translateX(0);
            }
        }

        .mid-image{
            display: flex;
            justify-content: center;
        }

        .hover-img{
            box-shadow: 0;
            transition: box-shadow .5s;
            transition: transform 500ms;
        }

       .hover-img:hover {
            box-shadow: 0 0 12px #515151;
           transform: translateY(-10px);
       }

        .spacer{
            margin-top: 40px;
        }

        .hero-text{
            color:#FFFFFF;
            font-weight:900;
            font-size: 62px;
            line-height: 60px;

        }
        @media (max-width: 800px) {
          /* Hide the image and display the text */
          .desktop-only {
            display: none;
          }
          .mid-image{
            padding-top:4px;
            padding-bottom:4px;
          }

        }

    </style>
    <div class="hero">
        <div class="container">
           <!-- <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">Navigation goes here</div>
            </div>
            -->
            <div class="row">
            <div class="col-lg-4">
                <img src="../img/touchdown-club-logo_small3.png" alt="Logo">
                <div class="slide-right slide-in desktop-only">
                    <h2><img src="../img/national_titles_final.png" alt="7 National Titles"></h2>
                </div>
                <div class="slide-right-2 slide-in desktop-only">
                    <h2><img src="../img/heisman.png" alt="7 Heisman Winners"></h2>
                </div>
                <div class="slide-right-3 slide-in desktop-only">
                    <h2><img src="../img/confrence.png" alt="50 Conference titles"></h2>
                </div>

            </div>
                <div class="col-lg-8">
                    <p class="hero-text" style="text-align: center">COLLEGE FOOTBALLS BEST TRADITION  </p>
                    <p style="text-align: center"><a href="/join"><button style="border: solid 2px #FFFFFF; color:#FFFFFF;  background-color: Transparent;
    background-repeat:no-repeat;">Join Now</button></a></p>
                </div>
            </div>


        </div>

    </div>
    <div style="background-color: #841617;
                font-size: 32px;  padding: 20px; text-align: center;text-align: center;">
                @if($redriver->active == 1)
                <p><a href="/outx" style="color:#FFFFFF; text-decoration:none;">{{$redriver->home_content}}</a></p>
                @endif
        @if($parking->active==1)
        <p style="clear:both;"><a href="/parking" style="color:#FFFFFF; text-decoration:none;">{{$parking->content}}</a></p>
        @endif
     </div>
    <!-- End of Hero -->
    <div class="container">
        <!--rest of body -->
    <div id="currentEvents">
        <div></div>
    </div>
   <div class="row spacer">
       <div class="col-lg-4 mid-image" ><a href="join"><img src="../img/bobmembership.jpg" style="border: 1px #000 solid;"  class="hover-img img-fluid"></a></div>
       <div class="col-lg-4 mid-image"><a href="outx"><img src="../img/Baker-outx2.jpg" style="border: 1px #000 solid;" class="hover-img img-fluid"></a></div>
       <div class="col-lg-4 mid-image"><a href="/history"><img src="../img/history.jpg" alt="History" style="border: 1px #000 solid;" class="hover-img img-fluid"></a></div>
   </div>
    <div class="spacer"></div>
    <div class="row">
        <div class="col-lg-6 mid-image">
            <a href="parking"><img src="../img/gamedayparking.jpg" alt="Gameday parking" style="border: 1px solid #000000;"  class="hover-img img-fluid"></a>
        </div>
        <div class="col-lg-6 mid-image">
            <a href="redwhitegame"><img src="../img/coachesluncheon.jpg" alt="Spring Game" style="border: 1px solid #000000;"  class="hover-img img-fluid"></a>
        </div>
    </div>
        <div class="spacer"></div>
    </div>



@stop
