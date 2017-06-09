<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
      <ul>
      @foreach ($employees as $employee)
      	<a href="/employee/{{ $employee->id }}">
        	<li>{{ $employee->name }}</li>
        </a>
      @endforeach
    </ul>
</body>

</html>
