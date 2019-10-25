<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Dain - Password</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/password.css">
	<link rel="stylesheet" type="text/css" href="assets/font/css/all.min.css">
    <link rel="icon" type="image/png" href="assets/img/logotipo.png" />
</head>
<body>

    <div class="contenedor">
       <div class="logo">
       	  <img src="assets/img/logotipo.png" alt="Logotipo de Danis">
       </div>

       <form action="" class="app" id="app">
       	   <div class="fila numero-caracteres">
       	   	  <div class="col">
       	   	  	 <label for="numero-caracteres">Número de carácteres</label>
       	   	  </div>
       	   	  <div class="col botones">
       	   	  	 <div>
       	   	  	 	<button class="btn" id="btn-menos-uno"><i class="fas fa-minus"></i></button>
       	   	  	 </div>
       	   	  	 <div>
       	   	  	 	<input type="text" id="numero-caracteres" readonly value="12">
       	   	  	 </div>
       	   	  	 <div>
       	   	  	 	<button class="btn" id="btn-mas-uno"><i class="fas fa-plus"></i></button>
       	   	  	 </div>
       	   	  </div>
       	   </div>

           <div class="fila simbolos">
           	  <div class="col">
           	  	 <label for="simbolos">Incluir Simbolos?</label>
           	  </div>
           	  <div class="col">
           	  	 <button class="btn" id="btn-simbolos"><i class="fas fa-check"></i></button>
           	  </div>
           </div>

           <div class="fila numeros">
           	  <div class="col">
           	  	 <label for="numeros">Incluir Números?</label>
           	  </div>
           	  <div class="col">
           	  	 <button class="btn" id="btn-numeros"><i class="fas fa-check"></i></button>
           	  </div>
           </div>

           <div class="fila mayusculas">
           	  <div class="col">
           	  	 <label for="mayusculas">Incluir Mayúsculas?</label>
           	  </div>
           	  <div class="col">
           	  	 <button class="btn" id="btn-mayusculas"><i class="fas fa-check"></i></button>
           	  </div>
           </div>

           <div class="fila generar">
           	  <div class="col">
           	  	 <button class="btn btn-generar" id="btn-generar">Generar<i class="fas fa-lock"></i></button>
           	  </div>
           	  <div class="col">
           	  	 <input type="text"  class="input-password" id="input-password" readonly value="eretrt">
           	  </div>
           </div>

           <div class="fila alerta">
           	 <div class="col">
           	 	 <div class="alerta-copiado" id="alerta-copiado">
           	 	 	<p><i class="fas fa-copy"></i> Texto copiado</p>
           	 	 </div>
           	 </div>
           </div>
       </form>
    </div>

   <script src="assets/js/app.js"></script>
</body>
</html>