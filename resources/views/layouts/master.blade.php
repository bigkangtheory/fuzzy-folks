<!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <meta name="description" content="">
     <meta name="author" content="">
     <link rel="icon" href="../../favicon.ico">

     <title>Blog Template for Bootstrap</title>

     <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

     <!-- Custom styles for this template -->
     <link href="blog.css" rel="stylesheet">
   </head>

   <body>

  @include ('layouts.nav')
  <div class="blog-header">
     <div class="container">

       <div class="blog-header">
         <h1 class="blog-title">The Bootstrap Blog</h1>
         <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
       </div>
    </div>
  </div>

    <div class="container">
       <div class="row">
         @yield ('content')


         @include ('layouts.sidebar')
       </div>
     </div>
           <nav>
             <ul class="pager">
               <li><a href="#">Previous</a></li>
               <li><a href="#">Next</a></li>
             </ul>
           </nav>

@include ('layouts.footer')
   </body>
 </html>
