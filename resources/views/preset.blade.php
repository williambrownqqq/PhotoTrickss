@extends('layouts.app')

@section('main')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contacts</title>
    <link rel="stylesheet" href="{{ asset('styles/contacts.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/footer.css') }}">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/c18b586157.js" crossorigin="anonymous"></script>
    <!-- scroll -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body>
    <div class="wrapper">
        <header>
        <nav class="navy">
            <div class="webLogo">
                <img class="cameraLogo" src="{{ asset('fragments/cameraLogo.svg') }}">
            </div>

            <div class="photoTricks">
                PhotoTricks
            </div>

            <div class="menu">
                <ul id="navID">
                    <li><a href="{{ route('indexHTML')}}">Home</a></li>
                    <li><a href="{{ route('collabsHTML')}}">Project</a></li>
                    <li><a href="{{ route('galleryHTML')}}">Gallery</a></li>
                    <li><a id="aboutID">About</a></li>
                    <li><a href="{{ route('contactsHTML')}}">Contact</a></li>
                </ul>
            </div>
            <div onclick="toggleMenu()" class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        </header>

        <div id="content" class="content">
            <div class="contacts">
                <p class="title">{{$preset->name}}</p>
                <div class="photoANDtext">
                    <img class="myPhoto" src="{{ asset('fragments/'.$preset->imgID.'.jpg') }}">
                    <div class="contactsTXT">
                        <p>{{$preset->name}}</p >
                        <p>{{$preset->description}}</p>
                        <p>{{$preset->price}} $</p>
                    </div>
                </div>
            </div>
        </div>
 


                    <footer class="footer">
                        <div class="container">
                            <div class="row">
                                <div class="footer-col">
                                    <ul>
                                        <li>Workarea</li>
                                        <li>8 Builders Avenue</li>
                                        <li>Kiev</li>
                                        <li>MS 97545 7954</li>
                                    </ul>
                                </div>

                                <div class="footer-col">
                                    <div class="social-networks">
                                        <ul>
                                            <a href="https://www.facebook.com/"><i
                                                    class="fa-brands fa-facebook-square"></i></a>
                                            <a href="https://www.instagram.com/"><i
                                                    class="fa-brands fa-instagram"></i></a>
                                            <a href="https://twitter.com/home?lang=ru"><i
                                                    class="fa-brands fa-twitter"></i></a>
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
                <script type="text/javascript" src="{{ asset('navy.js') }}"></script>



</body>

</html>

@endsection