<?php

    //require "../plantilla/header.php";
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../publico/css/estilo.css">
    <title>Listado de personas</title>
</head>
<body>
    <header>
    </header>
    <main class="container">
        <h1 class="text-center">Registro de Usuario</h1>  
        
        <br>
        <br>
        
                <form id="formRegistroUsuario" name="formRegistroUsuario">          
                    
                    
                        <label for="Nombre" class="casilla1">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre"  class="casilla" placeholder="Ingrese su nombre">
                        
                    
                    
                        <label for="Apellidos" class="casilla1">Apellidos</label>
                        <input type="text" class="form-control" id="Apellidos" name="Apellidos"  class="casilla" placeholder="Ingrese sus apellidos" >
                        
                    
                                    
                        <label for="TipoIdentificacion" class="casilla1">Tipo Identificacion</label>
                        <select id = "TipoIdentificacion" name="TipoIdentificacion">
                                    <option value="1" selected>Cedula Ciudadania</option>
                                    <option value="2" >Tarjeta Identidad</option>
                                    <option value="3">Pasaporte</option>                            
                        </select>                
                    
                    
                        <label for="NumeroIdentificacion" class="casilla1">Numero de Identificacion</label>
                        <input type="text" class="form-control" id="NumeroIdentificacion" name="NumeroIdentificacion"  class="casilla" placeholder="Ingrese sus numero de identificacion">
                        
                    
                    
                        <label for="NumeroFijoMovil" class="casilla1">Numero fijo o movil</label>
                        <input type="text" class="form-control" id="NumeroFijoMovil" name="NumeroFijoMovil" class="casilla"  placeholder="Ingrese sus numero de fijo o movil">
                        
                    
                    
                        <label for="Correo" class="casilla1">Correo electronico</label>
                        <input type="email" class="form-control" id="Correo" name="Correo" class="casilla"  placeholder="ingrese su correo electronico">
                        
                    
                    
                        <label for="ConfirmarCorreo" class="casilla1">Confirmar correo electronico</label>
                        <input type="email" class="form-control" id="ConfirmarCorreo" name="ConfirmarCorreo" class="casilla" placeholder="ingrese su correo nuevamente su correo electronico">                    
                    
                        <button type="submit" class="btnRectangulo"><i class="fa-solid fa-floppy-disk"></i>Registrar</button>
                        
                        <div id="condiciones">
                            <input type="checkbox" id="TerminosCondiciones" name="TerminosCondiciones">
                            <label for="terminos" >Acepto los </label><a href="#" class="btn btn-outline-primary btn-sm" title="registro">terminos y condiciones</a>
                        </div>

                        
                </form>
            
    </main>


<?php

    //require "../plantilla/footer.php";
    /**/

?>

<script src="../publico/js/funcion-guardarformulario.js"></script>
</body>
</html>