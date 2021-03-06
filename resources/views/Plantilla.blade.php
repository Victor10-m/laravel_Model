<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>

    
  </head>
  <body>

  <a class="btn btn-danger btn-sm float-right" 
  href="JavaScript: document.getElementById('logout').submit()">
  cerrar sesion
  </a>
      <form action="{{ route('logout')}}" id="logout" style="display:none" method="post" >
      @csrf
      </form>

  @if(session('info'))
    <div>{session('info')}</div>
  @endif

  <div  class="float-right">
 <a class="btn btn-toolbar btn-sm">Usuario activo: {{auth()->user()->name}} </a>
  
  </div>
  <br>

  
    <div  class="container" >
    <a href="{{ route('inicio')}}" class="btn btn-primary"> Inicio </a>
    <a href="{{ route('foto') }}" class="btn btn-primary"> Fotos </a>
    <a href="{{ route('noticias') }}" class="btn btn-primary"> Blog </a>
    <a href="{{ route('nosotros') }}" class="btn btn-primary"> Nosotros </a>
    </div>
    <div class="container">
    @yield('seccion')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function () {
      (function ($) {
      $('#filtrar').keyup(function () {
      var rex = new RegExp($(this).val(), 'i');
      $('.buscar tr').hide();
      $('.buscar tr').filter(function () {
      return rex.test($(this).text());
      }).show();
      })
      }(jQuery))
      });

    </script>

</body>
</html>