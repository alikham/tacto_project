<!DOCTYPE html>
<html>
  <head>
    <title>Car {{ $user->id }}</title>
  </head>
  <body>
    <h1>Car {{ $user->id }}</h1>
    <ul>
      <li>Make: {{ $user->name }}</li>
      <li>Model: {{ $user->file_location }}</li>
      <li>Produced on: {{ $user->email }}</li>
    </ul>
  </body>
</html>
