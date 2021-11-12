 <?php   require_once('controller.php');   ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="/style/style.css">
     <title>Tarea2</title>

 </head>
 <body>
     <main>
        <h1>Agenda</h1>
        <!-- si la sesión esta vacia no mostraré el formulario -->
        <?php  if(!empty($_SESSION['misDatos'])){?>
            <fieldset id="datos">
                <legend>Datos Agenda</legend>
                <!-- recorremos el array de la sesión y con un foreach imprimimos en parrafos dentro de un div.  -->
                <?php foreach($_SESSION['misDatos'] as $nombre => $telefono){ ?>
                    <div id="telefonos">
                        <p class="nombreAgenda"><?=$nombre?></p>
                        <p><?=$telefono?></p>
                    </div>
                <?php } ?>
            </fieldset>
        <?php } ?>
        <!-- Genero un formulario que enviara los datos por post.  -->

        <form action="index.php" method="POST">
            <fieldset id="nuevo" >
                <legend>Nuevo Contacto</legend>
                <div class="campos">
                    <label for="nombre">Nombre: </label>  
                    <input type="text" name="nombre"> 
                </div>

                <div class="campos">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" name="telefono">       
                </div>

                <div>
                    <input class="azul" class="buttom" type="submit" name="add" value="Añadir contacto"/>
                    <!-- tipo reset para limpiar los campos -->
                    <input class="verde" class="buttom" type="reset" name="limpiar" value="Limpiar campos" />
                </div>  
            </fieldset>
        </form>
        <!-- si la sesión esta vacia no mostraré el formulario -->
        <!-- Tal y como se solicita lo envio por get.  -->
        <?php  if(!empty($_SESSION['misDatos'])){?>
            <form action="index.php" method="$_GET">
            <fieldset id="vaciar">
                <legend>Vaciar Agenda</legend>
                <input class="rojo" class="buttom" type="submit" name="limpiar" >
            </fieldset>
            </form>
        <?php } ?>
     

     </main>



     
 </body>
 </html>