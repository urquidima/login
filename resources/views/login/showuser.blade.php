<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div><a href="{{action('LoginController@create')}}">crear usuario</a></div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">usuario</th>
      <th scope="col">password</th>
      <th scope="col">key</th>
      <th scope="col">actualizar</th>
      <th scope="col">borrar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($usuarios as $user)
    <tr>
      <th scope="row">{{$user->idUsuarios}}</th>
      <td>{{$user->user}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->key}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>