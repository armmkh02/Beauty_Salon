<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surfice Media</title>
</head>
<body>
<h1>{{ $details['title'] }}</h1>
<h3>{{ $details['body'] }}</h3>
<h3>{{ $details['image_text'] }} <img src="{{ asset('front/assets/them-img/them1.png') }}"> </h3>
<h4>  Email:{{ $details['email'] }}</h4>
<h4>  Phone:{{ $details['phone'] }}</h4>
<h5>Message:{{ $details['message'] }}</h5>
</body>
</html>
