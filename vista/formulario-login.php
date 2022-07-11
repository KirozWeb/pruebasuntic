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
    <title>Formulario de Login</title>
</head>
<body>
    <header>
    </header>
    <main class="container">
        <h1 class="text-center">Iniciando sesion</h1>  
        
        <br>
        <br>
        
                <form id="formSesionUsuario" name="formSesionUsuario"> 
                        <label for="TipoIngresos" class="casilla1">Elija si tiene codigo de seguridad</label>
                        <select id = "TipoIngreso" name="TipoIngreso">
                                    <option value="1" selected>Obtener codigo</option>
                                    <option value="2" >Tengo Codigo</option>                                    
                        </select>                
                    
                        <label for="NumeroIdentificacion" class="casilla1">Numero de Identificacion</label>
                        <input type="text" class="form-control" id="NumeroIdentificacion" name="NumeroIdentificacion"  class="casilla" placeholder="Ingrese sus numero de identificacion">                        
                    
                        <label for="Correo" class="casilla1">Correo electronico</label>
                        <input type="email" class="form-control" id="Correo" name="Correo" class="casilla"  placeholder="ingrese su correo electronico">
                        <label for="CodigoSeguridads" class="casilla1">Ingrese aqui si tiene su codigo de seguridad, sino dejelo en blanco</label>
                        <input type="text" class="form-control" id="CodigoSeguridad" name="CodigoSeguridad" class="casilla"  placeholder="ingrese su codigo de seguridad">                      
                    
                        <button type="submit" class="btnRectangulo"><i class="fa-solid fa-floppy-disk"></i>Registrar</button>                   
                                                
                </form>  
                <br> 
                <div id="div1">
                    <table id="tblCor" class="table table-striped">   
                        <tbody id="tblCorreo">                
                        </tbody>         
                    </table>
                </div>         
    </main>

<?php

    //require "../plantilla/footer.php";
    /**/

?>

<script src="../publico/js/funcion-loguearformulario.js"></script>
</body>
</html>