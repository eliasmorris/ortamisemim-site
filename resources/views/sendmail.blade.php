<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Name: {{$fullName}}</h1>
    <h1>From: {!! htmlspecialchars($email) !!}</h1>
    <h1>Message: {!! htmlspecialchars($infoMessage) !!}</h1>
</body>

</html>