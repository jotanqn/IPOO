<?php
/******************************************
* MORA MARCOS, JUAN JULIAN  FAI-3133 jjulian.mora@est.fi.uncoma.edu.ar 
******************************************/
 
/**
* generar un arreglo de la coleccion del Vino
* @return array
*/
function cargarColeccionVinos(){
  $coleccionVino["Malbec"]=array(
    "cantBotellas" => [1 , 10],
    "fechaProd"=>  [2005, 2001],
    "precioUnidad"=>[1600, 2500]
    );

  $coleccionVino["Cabernet"]=array(
    "cantBotellas" => [15 , 12],
    "fechaProd"=>  [2008, 2010],
    "precioUnidad"=>[1700, 2000]
    );
  $coleccionVino["Merlot"]=array(
    "cantBotellas" => [15 , 40],
    "fechaProd"=>  [2004, 2012],
    "precioUnidad"=>[1800, 1000]
  );
  return $coleccionVino;
}
/**
* generar un arreglo de la coleccion del Vino
* @return array
*/
function promedioVino($coleccionVino){
$sumaBotellas=0;
$sumaPrecio=0;
$vinoPromedio=array();
    for($i=0; $i<count($coleccionVino["Malbec"]); $i++){

        $sumaBotellas= $sumaBotellas+ $coleccionVino["Malbec"]["cantBotellas"][$i];
        $sumaPrecio= $sumaPrecio + $coleccionVino["Malbec"]["precioUnidad"][$i];

    }
$promedioPrecio= $sumaPrecio/ count($coleccionVino["Malbec"]);
$vinoPromedio["Malbec"]=["promedioPrecio"=> $promedioPrecio, "sumaBotellas"=> $sumaBotellas];

$sumaBotellas=0;
$sumaPrecio=0;

    for($i=0; $i<count($coleccionVino["Cabernet"]); $i++){
      
        $sumaBotellas= $sumaBotellas+ $coleccionVino["Cabernet"]["cantBotellas"][$i];
        $sumaPrecio= $sumaPrecio + $coleccionVino["Cabernet"]["precioUnidad"][$i];

    }
$promedioPrecio= $sumaPrecio/ count($coleccionVino["Cabernet"]);
$vinoPromedio["Cabernet"]=["promedioPrecio"=> $promedioPrecio, "sumaBotellas"=> $sumaBotellas];

$sumaBotellas=0;
$sumaPrecio=0;

    for($i=0; $i<count($coleccionVino["Merlot"]); $i++){
        $sumaBotellas= $sumaBotellas+ $coleccionVino["Merlot"]["cantBotellas"][$i];
        $sumaPrecio= $sumaPrecio + $coleccionVino["Merlot"]["precioUnidad"][$i];

    }
$promedioPrecio= $sumaPrecio/ count($coleccionVino["Merlot"]);
$vinoPromedio["Merlot"]=["promedioPrecio"=> $promedioPrecio, "sumaBotellas"=> $sumaBotellas];

return $vinoPromedio;
}
     

/**PROGRAMA PRINCIPAL
 * $opcion string
 * $promedio array (llamada a la funcion)
 * $coleeccionVino array
 */

$coleccionVino = cargarColeccionVinos();

$vinoPromedio = promedioVino($coleccionVino);
print_r ($vinoPromedio);

