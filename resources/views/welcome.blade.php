<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="email" placeholder="email">
        @error('email')
            {{ $message }}
        @enderror
        <button type="submit">Test Now</button>
    </form>
</body>

</html>
