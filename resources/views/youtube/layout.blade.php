<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght
    @500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('youtube_asset/css/style.css') }}">
    <title>Youtube</title>
</head>
<body>
    <!-- todo Navbar Section Start   -->
    <nav class="flex_div">
        <div class="nav_left flex_div">
            <img src="{{ asset("youtube_asset/images/menu.png ") }}" class="menu_icon">
            <!-- <img src="{{ asset("youtube_asset/images/logo.png ") }}" class="logo"> -->
        </div>
        <div class="nav_middle flex_div">
            @stack('search')
        </div>
        <div class="nav_right flex_div">
            <img src="{{ asset("youtube_asset/images/upload.png ") }}">
            <img src="{{ asset("youtube_asset/images//more.png ") }}">
            <img src="{{ asset("youtube_asset/images/notification.png ") }}">
            <img src="{{ asset("youtube_asset/images/Jack.png ") }}" class="user_icon">
        </div>
    </nav>
    <!-- todo Navbar Section End   -->

    <!-- todo Sidebar Section Start   -->
    <div class="sidebar">
        <div class="shortcut">
            <a href=""><img src="{{ asset("youtube_asset/images/home.png ") }}" alt=""><p>Home</p></a>
            <a href=""><img src="{{ asset("youtube_asset/images/explore.png ") }}" alt=""><p>Explore</p></a>
            <a href=""><img src="{{ asset("youtube_asset/images/subscriprion.png ") }}" alt=""><p>Subscription</p></a>
            <a href=""><img src="{{ asset("youtube_asset/images/library.png ") }}" alt=""><p>Library</p></a>
            <a href=""><img src="{{ asset("youtube_asset/images/history.png ") }}" alt=""><p>History</p></a>
            <a href=""><img src="{{ asset("youtube_asset/images/playlist.png ") }}" alt=""><p>Playlist</p></a>
            <a href=""><img src="{{ asset("youtube_asset/images/messages.png ") }}" alt=""><p>Message</p></a>
            <a href=""><img src="{{ asset("youtube_asset/images/show-more.png ") }}" alt=""><p>Show More</p></a>
            <hr>
        </div>
        <div class="subscription">
            <h3>SUBCRIBED</h3>
            <a href=""><img src="{{ asset("youtube_asset/images/Jack.png ") }}" alt=""><p>Kashan Adnan</p></a>
            <a href=""><img src="{{ asset("youtube_asset/images/simon.png ") }}" alt=""><p>Thapa Technical</p></a>
            <a href=""><img src="{{ asset("youtube_asset/images/tom.png ") }}" alt=""><p>Izhan Farhan</p></a>
            <a href=""><img src="{{ asset("youtube_asset/images/megan.png ") }}" alt=""><p>Almi Teaching</p></a>
            <a href=""><img src="{{ asset("youtube_asset/images/cameron.png ") }}" alt=""><p>Codewithharry</p></a>
        </div>
    </div>
    <!-- todo Sidebar Section End   -->
    <div class="container">
       
        <div class="list_container">
            
            @yield('contains')
            
        </div>
    </div>
</body>
<script src="{{ asset('youtube_asset/js/script.js') }}"></script>
</html>