<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Connection</title>
</head>
<body>
    <h1>Database Connection Proof</h1>
    <div>
        @foreach ($businesses as $business)
            <h2>{{ $business->business_name}}</h2>
            <p>{{ $business->city}}, {{ $business->state}}</p>
        @endforeach
    </div>
</body>
</html>