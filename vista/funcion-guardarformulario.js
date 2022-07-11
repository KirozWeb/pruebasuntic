if(document.querySelector("#formRegistroUsuario")){
    let frmRegistro = document.querySelector("#formRegistroUsuario");
    console.log("guardar datos");
    frmRegistro.onsubmit = function(e){
        e.preventDefault();
        fntGuardar();
    }

    async function fntGuardar(){
        console.log("guardar datos nada");
        console.log("guardar nada");
        let frmRegistro = document.querySelector("#formRegistroUsuario");

        let nombre = document.querySelector("#Nombre").value;
        let apellidos = document.querySelector("#Apellidos").value;
        let tipoIdentificacion = document.querySelector("#TipoIdentificacion").value;
        let numeroIdentificacion = document.querySelector("#NumeroIdentificacion").value;
        let numeroFijoMovil = document.querySelector("#NumeroFijoMovil").value;
        let correo = document.querySelector("#Correo").value;
        let confirmarCorreo = document.querySelector("#ConfirmarCorreo").value;
        let terminosCondiciones = document.querySelector("#TerminosCondiciones").value;

        console.log("estos son terminos");

        if(nombre == "" || apellidos == "" || tipoIdentificacion == "" || numeroIdentificacion == "" || numeroFijoMovil == "" || correo == "" || confirmarCorreo == "" || terminosCondiciones != 1){
            alert("Todos los campos son obligatorios");
        }

        /*
        try{
            
            const data = new FormData(document.getElementById('frmRestrosAdministrador'));
            
            let resp = await fetch("../../controllers/Administrador.php?op=registro",{
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: data
            });
            
            json = await resp.json();
            
            if(json.status){
                swal("Guardar",json.msg,"success");
                frmRegistro.reset();
            }
            else{
                swal("Guardar",json.msg,"error");
            }
            
            console.log(resp);
        }catch(err){
            console.log("Ocurrio un error: " + err);
        }
        */
        
    }
}