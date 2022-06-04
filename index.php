<?php

//setear las variables con los valores iniiales 

$valor = '';
$desde = '';
$hasta = '';

//crear las operaciones desde, a una unidad por defecto (metro)

//Declaracion de la funcion 1 (DESDE) a metros como unidad por defecto
function convertir_desde($valor, $desde){

    if (isset($_POST['convertir'])) {
        switch ($_POST['desde']) {
            case 'Milimetro':
                return $valor/1000;
                break;
            case 'Centimetro':
                return $valor/100;
                break;
             case 'Decimetro':
                return $valor/10;
                break;
             case 'Metro':
                return $valor*1;
                break;
             case 'Decametro':
                return $valor*10;
                break;
            case 'Hectometro':
                return $valor*100;
                break;
            case 'Kilometro':
                return $valor*1000;
                break;
           
            default:

                echo "Conversion no soportada";

                break;
        } 
    }
};

if (isset($_POST['valor']) && isset($_POST['desde'])) {
    $valor = $_POST['valor'];
    $desde = $_POST['desde'];
};
//Resultado de la funcion 1
$resultado_1 = convertir_desde($valor, $desde);


//Declaracion de la funcion 2 (HASTA) a metros como funcion po defecto 
function convertir_hasta($resultado_1, $hasta){

   if (isset($resultado_1)) {
       switch ($_POST['hasta']) {
            case 'Milimetro':
                return $resultado_1*1000;
                break;
            case 'Centimetro':
                return $resultado_1*100;
                break;
             case 'Decimetro':
                return $resultado_1*10;
                break;
             case 'Metro':
                return $resultado_1*1;
                break;
             case 'Decametro':
                return $resultado_1/10;
                break;
            case 'Hectometro':
                return $resultado_1/100;
                break;
            case 'Kilometro':
                return $resultado_1/1000;
                break;
           
            default:

                echo "Conversion no soportada";

                break;
        } 
    };
};

if (isset($_POST['hasta'])) {
    $hasta = $_POST['hasta'];
};

$resultado_2 = convertir_hasta($resultado_1, $hasta);
 

?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Conversor de Longitud</title>
  </head>
  <body>
    <h1 class="text-center">Conversor de Longitud</h1>

    <div class="container">
        <form  method = "POST" action="<?php $_SERVER['PHP_SELF'];?>"> 
            <div class= "row mt-4">

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="valor" class="form-label">VALOR:</label>
                        <input type="number" class="form-control" name = "valor">                
                    </div>
                </div>
           
                <div class="col-sm-6">
                    <label for="desde" class= "form-label">DESDE</label>
                    <select class="form-select" name = "desde">    
                        <option value="">--Selecciona un valor--</option>                       
                        <option value="Milimetro">Milímetro</option>
                        <option value="Centimetro">Centímetro</option>
                        <option value="Decimetro">Decímetro</option>
                        <option value="Metro">Metro</option>
                        <option value="Decametro">Decámetro</option>
                        <option value="Hectometro">Hectómetro</option>
                        <option value="Kilometro">Kilómetro</option>
                    </select>
                </div>

                <div class="col-sm-6">
                    <label for="hasta" class= "form-label">HASTA</label>
                    <select class="form-select" name = "hasta">
                        <option value="">--Selecciona un valor--</option>  
                        <option value="Milimetro">Milímetro</option>
                        <option value="Centimetro">Centímetro</option>
                        <option value="Decimetro">Decímetro</option>
                        <option value="Metro">Metro</option>
                        <option value="Decametro">Decámetro</option>
                        <option value="Hectometro">Hectómetro</option>
                        <option value="Kilometro">Kilómetro</option>
                    </select>              
                </div>
           
            </div>  

                    <div class="row mt-4">
                        <div class="col-sm-6">
                             <button type="submit" class="btn btn-primary w-100 py-4" name= "convertir">CONVERTIR</button>
                        </div>
                
                            <div class="col-sm-6">
                                 <div class="mb-3">
                                    <label for="resultado" class="form-label">RESULTADO:</label>
                                    <input type="text" class="form-control" name = "resultado" value = "
                                        <?php echo $resultado_2; ?>">                
                                </div>
                            </div>
                    </div> 

        </form>     
    </div>
    
  </body>
</html>