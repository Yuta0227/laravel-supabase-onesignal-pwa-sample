<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    こんにちは
    <form method="POST" action="{{ route('test.send_notification') }}">
        @csrf
        <input value="通知送信" type="submit">
    </form>
</body>
</html>