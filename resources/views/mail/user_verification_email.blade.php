<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Verification Email</h1>

</br>
<p>Click and aprove your account | <a href="{{URL::to('/user-varification',$user->email_verified_token)}}">Click</a> </p>
</body>
</html>