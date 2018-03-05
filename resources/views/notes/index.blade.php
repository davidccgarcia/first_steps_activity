<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes</title>
</head>
<body>
    <ul>
        @foreach ($notes as $note)
        <li>{{ $note->note }}</li>
        @endforeach
    </ul>
</body>
</html>