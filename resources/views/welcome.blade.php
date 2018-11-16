<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap4/css/bootstrap.min.css') }}" >
      
        <!-- Styles hola -->
        
    </head>
    <body>
       <div class="container">
           <div class="jumbotron">
              <h1 class="display-4 text-center">Proyecto Base de Datos Hospital </h1>
              <hr class="my-4">
              <h3 class="text-center">Universidad de Xalapa</h3>
                <div class="text-center">
                    <img src="{{ asset('imagenes/logo.png') }}"  alt="">
                </div>
           </div>
       </div>

       <div class="container">
  <div class="card">
    <div class="card-header"><h5>Captura de Datos de Medicos</h5></div>
    <div class="card-body">
      <form>
      <div class="row">
      
       <div class="col-12">
            <h4 class="mb-3">Ingresar Médico : </h4>
       </div>
     
           
                <div class="col-4">

                <label>Nombre:</label>

                <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required="">

            </div>

            <div class="col-4">

                <label>Password:</label>

                <input type="password" name="password" class="form-control" placeholder="Password" required="">

            </div>

            <div class="col-4">

                <label>Email:</label>

                <input type="email" name="email" class="form-control" placeholder="Email" required="">

            </div>
           

            <div class="form-group">

                

            </div>

       
      
      </div>
      <div class="col-12 mt-3" style="float: right;" align="right">
           <div class="col-6 text-right">
               
                <button class="btn btn-success btn-submit">Enviar Médico</button>
          </div>
        </div>

      </form>
      
        
   
     
    

      
    </div>
    
    </div>
  
</div>
           <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="{{asset('bootstrap4/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('bootstrap4/popper.min.js')}}"></script>

     <script src="{{asset('bootstrap4/js/bootstrap.min.js')}}"></script>

    </body>
    <script type="text/javascript">



    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $(".btn-submit").click(function(e){

        e.preventDefault();



        var name = $("input[name=name]").val();

        var password = $("input[name=password]").val();

        var email = $("input[name=email]").val();



        $.ajax({

           type:'POST',

           url:'/ajaxRequest1',

           data:{name:name, password:password, email:email},

           success:function(data){

              alert(data.success);

           }

        });



    });

</script>
</html>
