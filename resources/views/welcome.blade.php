<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    hello from welcome page via fuzzy controller
    <div class="search-bar">
      <input type="text" placeholder="look up a fuzzer" value="">
      <button type="submit" name="button">Search</button>
    </div>
    <ul>
      <a href="/fuzzyfolks/employee"><li>All Fuzzys</li><a>
      <li>Fuzzies by <a href="/fuzzyfolks/department">Department</a></li>
        <ul>
          <a href="/fuzzyfolks/departments/1/employees"><li>web</li></a>
          <a href="/fuzzyfolks/departments/2/employees"><li>iOS</li></a>
          <a href="/fuzzyfolks/departments/3/employees"><li>android</li></a>
        </ul>
    </ul>
  </body>
</html>
