<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    hello from departments list page
    <ul>
      @foreach ($departments as $department)
      <li>{{ $department->name }}</li>
      @endforeach
    </ul>
  </body>
</html>
