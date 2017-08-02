<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Vehicle Data </title>
  </head>
  <body>
    <h1> Vehicle Data </h1>
    @foreach($vehicles as $v)
      {{ $v['manufacturer'] }}
      {{ $v['model'] }} <br>
    @endforeach
  </body>
</html>
