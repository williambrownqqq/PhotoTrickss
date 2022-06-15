<!-- от какого файла мы все наследуем -->
@extends('layouts.app')
<!-- куда мы встраиваем наш блок кода, в какую секцию -->

@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>williambrownqqqqq</title>
      <link rel="stylesheet" href="{{ asset('styles/indexStyle.css') }}">
      <link rel="stylesheet" href="{{ asset('styles/about.css') }}">
      <link rel="stylesheet" href="{{ asset('styles/chooseYourCourseStyle.css') }}">
      <link rel="stylesheet" href="{{ asset('styles/LightroomPresetsStyle.css') }}">
      <link rel="stylesheet" href="{{ asset('styles/sliderStyle.css') }}">
      <link rel="stylesheet" href="{{ asset('styles/footer.css') }}">
      <!-- icons -->
      <script src="https://kit.fontawesome.com/c18b586157.js" crossorigin="anonymous"></script> 
      <!-- scroll -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>

      <div class="wrapper">
            <header class="background-image">

                  <nav>
                        <div class="webLogo">
                            <img class="cameraLogo" src ="{{ asset('fragments/cameraLogo.svg') }}">
                        </div>
        
                        <div class="photoTricks">
                        PhotoTricks
                        </div>

                        <div class="menu">
                              <ul id="navID">
                                  <!-- обращаемся к функци route и указываем какой обработчик хотим использовать  -->
                                    <li><a href="{{ route('indexHTML')}}">Home</a></li>
                                    <li><a href="{{ route('collabsHTML')}}">Project</a></li>
                                    <li><a href="{{ route('galleryHTML')}}">Gallery</a></li>
                                    <li ><a id="aboutID">About</a></li>
                                    <li><a href="{{ route('contactsHTML')}}">Contact</a></li>
                              </ul>
                        </div>
                        <div onclick="toggleMenu()" class="burger">
                            <div class="line1"></div>
                            <div class="line2"></div>
                            <div class="line3"></div>
                        </div>
                  </nav>
                <div class="quotexbutton">
                  <div class="quote"><p>20 years later a new story begins, but first,<br> a moment back in time.</p></div>
                <a href="{{ route('contactsHTML')}}" >
                    <button class="button">View Details</button>
                </a>
                </div>

            </header>

            <div id="content" class="content">
                <div class="aboutProject">
                    <p class="aboutTitle">About Project</p>
                <div class="photoANDtext">
                    <div class="aboutTXT">
                        <p>Hello, i’m Alex. With a desire to share my experience and help others, at the start of 2022 I created PhotoTricks - my own internet project that focuses on both the craft and technique of film and digital photography.
        
                        Here you can find both cources and free recourses to improve your skills. Choose courses according to your interests and see the photos made by photographers.
                        
                        As well, you can find different LightRoom presets!
                        
                        </p>
                        <a href="{{ route('feedbackHTML')}}" >
                            <button class="commentButton">Leave a comment</button>
                        </a>    
                    </div>
                    
                    <div >
                        <img class="vanPhotoContainer"src ="{{ asset('fragments/van.jpg') }}">
                    </div> 
                </div>
                </div>

                <div class="chooseYourCourse">

                    <p class="title">Choose your course</p>
                    @foreach($courses as $course)
                       

                        <div class="cards">
                        <a href="{{$course->links}}">
                        <div class="card-img">
                            <img src="{{ asset('fragments/'.$course->imgID.'.webp') }}" alt="fuji">
                        </div>
                        <div class="card-body">
                    
                            <p>{{$course->author->name}}</p>
                        
                            <!-- <p>Corey Wolfenbarger</p> -->
                            <h2>{{$course->name}}</h2>
                            <div class="grey-block">
                                <p class ="back">Course</p>
                                <p class = "noback">| {{$course->hours}}</p>
                            </div>
                        </div>
                    </a>
                    </div>  
                        
                    @endforeach
                
                </div>

                <div class="Lightroom-presets">
                    <p class="title">Lightroom presets</p>
                    @foreach($presets as $preset)
               

                    <div class="LightRoomcards">
                        <a href=" {{ url('index/preset', ['id' => $preset->id]) }}">
                       
                        <div class="LightRoomcard-img">
                            <img src="{{ asset('fragments/'.$preset->imgID.'.jpg') }}" alt="fuji">
                        </div>
                        <div class="LightRoomcard-body">
                            <p>{{$preset->name}}</p>
                        </div>
                    </a>
                    </div> 
                        
                    @endforeach
                   
                </div>

                <div class="partners">
                    <p class="partnersTitle">Our partners</p>
                    <section class="section">

                        <div class="slider">
 
                        <div class="slides">
                            <input type ="radio" name="radio-btn" id="radio1">
                            <input type ="radio" name="radio-btn" id="radio2">
                            <input type ="radio" name="radio-btn" id="radio3">
                            <input type ="radio" name="radio-btn" id="radio4">

                            <div class="slide first">
                                <h1>Kyle McDougall</h1>
                                <div class="imagg">
                                    <img src="{{ asset('fragments/gallery/kyle.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <h1>Peter McKinnon</h1>
                                <div class="imagg">
                                    <img src="{{ asset('fragments/gallery/peter.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <h1>Willem Verbeck</h1>
                                <div class="imagg">
                                    <img src="{{ asset('fragments/gallery/char.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <h1>Joe Greer</h1>
                                <div class="imagg">
                                    <img src="{{ asset('fragments/gallery/calvin.jpg') }}" alt="">
                                </div>
                            </div>

                            <div class="navigation-auto">
                                <div class="auto-b1"></div>
                                <div class="auto-b2"></div>
                                <div class="auto-b3"></div>
                                <div class="auto-b4"></div>
                            </div>

                            <div class="navigation-manual">
                                <label for="radio1" class="manual-btn"></label>
                                <label for="radio2" class="manual-btn"></label>
                                <label for="radio3" class="manual-btn"></label>
                                <label for="radio4" class="manual-btn"></label>
                            </div>

                        </div>
                        
                        </div>
                    </section>
                </div>
            </div>

            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <!-- <h4>address</h4> -->
                            <ul>
                                <li>Workarea</li>
                                <li>8 Builders Avenue</li>
                                <li>Kiev</li>
                                <li>MS 97545 7954</li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <!-- <h4>social-networks</h4> -->
                            <div class="social-networks">
                                <ul>
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-square"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://twitter.com/home?lang=ru"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-col">
                            <!-- <h4>email</h4> -->
                            <ul>
                                <li>Say Hello</li>
                                <li>alexey.zanchenko@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script type="text/javascript" src="{{ asset('index.js') }}"></script>

      <script type="text/javascript">
        var counter=1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked=true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
        },5000);
      </script>

    

    

</body>
</html>
@endsection
