{{-- resources/views/bandle-city.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $data['name'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .header {
            text-align: center;
        }
        .header img {
            max-width: 100%;
            border-radius: 12px;
        }
        .overview {
            margin-top: 20px;
            background-color: #fff;
            padding: 15px;
            border-radius: 10px;
        }
        .champions {
            margin-top: 30px;
        }
        .champion {
            display: inline-block;
            width: 250px;
            margin: 10px;
            vertical-align: top;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .champion img {
            width: 100%;
            height: auto;
        }
        .champion .info {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>{{ $data['faction']['name'] }}</h1>
        <img src="{{ $data['faction']['image']['uri'] }}" alt="Bandle City Image">
        <div>
            <video width="600" controls>
                <source src="{{ $data['faction']['video']['uri'] }}" type="video/webm">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="overview">
        <h2>Overview</h2>
        {!! $data['faction']['overview']['short'] !!}
    </div>

    <div class="champions">
        <h2>Associated Champions</h2>
        @foreach ($data['associated-champions'] as $champion)
            <div class="champion">
                <img src="{{ $champion['image']['uri'] }}" alt="{{ $champion['name'] }}">
                <div class="info">
                    <h3>{{ $champion['name'] }}</h3>
                    <p>{{ $champion['title'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
