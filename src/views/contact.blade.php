<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact us anytime</h1>

    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your name please">
        <input type="email" name="email" placeholder="Your valid email">
        <textarea name="message" cols="30" rows="10" placeholder="">Your query</textarea>
        <button type="submit">Send</button>
    </form>
</body>
</html>