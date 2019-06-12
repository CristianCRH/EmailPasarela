<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://checkout.culqi.com/v2"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        

</head>
<body>
    <input type="button" id="buyButton" value="Pagar" data-producto="005" data-precio=1000 >

    <script>
    Culqi.publicKey = 'pk_test_KZH8HrkmOItB9qVx';
          Culqi.init();
         var producto="";
         var precio="";
    $('#buyButton').on('click', function(e) {
      
        producto=$(this).attr('data-producto');
                precio=$(this).attr('data-precio');

                    Culqi.settings({
                        title: producto,
                        currency: 'PEN',
                        description: producto,
                        amount: precio,
                    });
                    

      Culqi.open();
      e.preventDefault();
    
  });
  function culqi() {

    if (Culqi.token) { // ¡Objeto Token creado exitosamente!
        var token = Culqi.token.id;
        alert('Se ha creado un token:' + token);

                  var data={producto:producto,precio:precio,token:token};
                  var url="envio";

                  $.get(url,data,function(res){
                      alert(res);
                  });

    } else { // ¡Hubo algún problema!
        // Mostramos JSON de objeto error en consola
        console.log(Culqi.error);
        alert(Culqi.error.user_message);
    }
  };

</script>

</body>
</html>