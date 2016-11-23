<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <style type="text/css">

    </style>
</head>
<body>
    <h2>Notes</h2>
    <ul>
        @foreach ($notes as $note)
        <li>
            {{ $note->note }}
        </li>
        @endforeach
    </ul>
</body>
</html>
