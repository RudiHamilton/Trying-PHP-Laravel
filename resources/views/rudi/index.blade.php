<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laravel Projects Home</title>
</head>
<body>
    <h1>Currently Availiable Names</h1>
    <p>{{$Greetings}}</p>
    <ul>
        <li>
            <a href="/rudi/{{$peoplesInfo[0]["ID"]}} ">
                {{ $peoplesInfo[0]["Name"] }}
            </a>
        </li>
        <li>
            <a href="/rudi/{{$peoplesInfo[1]["ID"]}} ">
                {{ $peoplesInfo[1]["Name"] }}
            </a> 
        </li>
    </ul>
</body>
</html>