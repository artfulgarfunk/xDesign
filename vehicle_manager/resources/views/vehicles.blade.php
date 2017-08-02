<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Vehicle Data </title>
  </head>
  <body>
    <h1> Vehicle Data </h1>
    @foreach($vehicles as $v)
      {{ Form::open(array('method' => 'get', 'action' => array('VehicleController@show', $v->id))) }}
      {{ Form::submit($v['manufacturer'].' '.$v['model']) }}
      {{ Form::close() }} <br>
    @endforeach
  </body>
</html>
