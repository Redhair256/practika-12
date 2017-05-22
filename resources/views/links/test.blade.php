

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Listing</title>
      <link rel="stylesheet" href={{ asset('vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }} >
   </head>
   <body>

      <nav class="navbar navbar-default" role="navigation">
      <!-- Содержимое Navbar -->
         <div class="container">
         <ul class="nav navbar-nav">
            <li><a href="links"><span class="glyphicon glyphicon-list" aria-hidden="false"></span>
               Ссылки</a>
            </li>
            <li><a href="link\123"><span class="glyphicon glyphicon-stats" aria-hidden="false"></span>
               Статистика</a>
            </li>

         </ul>
         </div>
      </nav>

      <div class="container">
         

         <br>

         {{device}}
       
      </div>
      <script type="text/javascript" src={{ asset('vendor/components/jquery/jquery.min.js') }}></script>
      <script type="text/javascript" src={{ asset('vendor/twbs/bootstrap/dist/js/bootstrap.min.js') }}></script>    
   </body>
</html>