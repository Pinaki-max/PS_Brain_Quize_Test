<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{url('CSS/adminstyle.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/497fc3cf26.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="sidebar">
        <a class="active" href="adminpanelhome"><i class="fas fa-home"></i>Home</a>
        <a href="adminpanelnews"><i class="fas fa-newspaper"></i>News</a>
        <a href="adminpanelcontact"><i class="fas fa-address-card"></i>Contact</a>
        <a href="adminpanelabout"><i class="fas fa-eject"></i>About</a>
        <a href="adminpanelaccount"><i class="fas fa-user-circle"></i>Account</a>
        <a href="adminpanelsetting"><i class="fas fa-cog"></i>Setting</a>
      </div>
      <div class="content">
        
     </div>
    @yield('content')
</body>
</html>