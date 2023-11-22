<!DOCTYPE html>
<html>
<head>
    <title>Weather Information</title>
</head>
<body>
    <h1>Current Weather in {{ $weatherData['name'] }}</h1>
    <p>Description: {{ $weatherData['weather'][0]['description'] }}</p>ˇ

    <p>Pilt  {{ $weatherData['weather'][0]['icon'] }} </p>

    <p>Temperature: {{ $weatherData['main']['temp'] }} &#8451;</p>
    <p>Wind speed: {{ $weatherData['wind']['speed'] }} </p>

</body>
</html>