<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API - Envios</title>
    <link rel="stylesheet" href="assets/estilo.css" type="text/css">
</head>
<body>

<div  class="container">
    <h1>Api de Envíos</h1>
    <div class="divbody">
        <h3>Auth - login</h3>
        <code>
           POST  /auth
           <br>
           {
               <br>
               "usuario" :"",  -> REQUERIDO
               <br>
               "password": "" -> REQUERIDO
               <br>
            }
        
        </code>
    </div>      
    <div class="divbody">   
        <h3>Envios</h3>
        <code>
           GET  /envios?page=$numeroPagina
           <br>
           GET  /envios?id=$idEnvio
        </code>

        <code>
           POST  /envios
           <br> 
           {
            <br> 
               "destination" : "",          -> REQUERIDO
               <br> 
               "source" : "",               -> REQUERIDO
               <br> 
               "parametro1":"",
               <br> 
               "parametro2" :"",             
               <br>  
               "parametro3" : "",        
               <br>        
               "parametro4" : "",       
               <br>       
               "template" : "",      
               <br>         
               "token" : ""                  -> REQUERIDO        
               <br>       
           }

        </code>
        <code>
           PUT  /envios
           <br> 
           {
            <br> 
               "destination" : "",               
               <br> 
               "source" : "",                  
               <br> 
               "template":"",                 
               <br> 
               "parametro1" :"",             
               <br>  
               "parametro2" : "",        
               <br>        
               "parametro3" : "",       
               <br>       
               "parametro4" : "",      
               <br>         
               "token" : "" ,                -> REQUERIDO        
               <br>       
               "EnvioId" : ""   -> REQUERIDO
               <br>
           }

        </code>
        <code>
           DELETE  /envios
           <br> 
           {   
               <br>    
               "token" : "",                -> REQUERIDO        
               <br>       
               "EnvioId" : ""   -> REQUERIDO
               <br>
           }

        </code>
    </div>


</div>
    
</body>
</html>

