<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<ul>
    @foreach($tasks as $take)
        <li>
            <a href="/tasks/{{$take->id}}">
                {{$take->body}}</a>
        </li>
    @endforeach
</ul>

</body>
</html>