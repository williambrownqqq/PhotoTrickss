<!-- от какого файла мы все наследуем -->
@extends('layouts.app')
<!-- куда мы встраиваем наш блок кода, в какую секцию -->

@section('main')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/feedback.css">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/c18b586157.js" crossorigin="anonymous"></script>
    <!-- scroll -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body>
    <header>
        <nav class="navy">
            <div class="webLogo">
                <img class="cameraLogo" src="fragments/cameraLogo.svg">
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
        
        <div class="wrapper">
            <div class="containerr">
            <div class="FormTitle">Leave a comment</div>
            <!-- <form action="/feedback/commentForm" method="post"> -->
            <form action="{{ route('contact-form')}}" method="post">
                @csrf
                <div class="user-datails">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" id="name" name="name" class="form-content" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" id="email" name="email" class="form-content" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Social-networks</span>
                        <input type="text" placeholder="Enter your social-network" name="social-network" id="social-network" class="form-content" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Comments</span>
                        <input  type="text" placeholder="Enter your comment" id="commentInput" name="commentInput" class="form-content" required>
                    </div>
                    
                </div>
                <div class="buttonSubmit">
                        <input type="submit" value="Submit">
                </div>
                @if($errors->any())
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
            </form>
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



                <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
                <script type="text/javascript" src="navy.js"></script>



</body>

</html>

@endsection