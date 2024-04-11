<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Presto.it</title>
</head>
<body>
  <div>
    <h1>{{__('ui.mailTrap')}}</h1>
    <h2>{{__('ui.mailTrap2')}}</h2>
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
    <p>{{__('ui.mailTrap3')}}</p>
    <a href="{{route('make.revisor',compact('user'))}}"> {{__('ui.mailTrap4')}}</a>
  
  </div>
  
</body>
</html>