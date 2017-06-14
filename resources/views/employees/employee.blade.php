<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
  <a href="#">Ascending</a>
  <a href="#">Descending</a>
      <ul>
      @foreach ($employees as $employee)
      	<a href="/fuzzyfolks/employee/{{ $employee->id }}">
        	<li>{{ $employee->name }}</li>
        </a>
      @endforeach
    </ul>
</body>

</html>
