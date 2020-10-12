<?php 
/*
************** CALCULA LA HIPOTENUSA DEL TRIANGULO RECTANGULO ***************************
*/

if (isset($_POST['checkbox'])) {
    $checkbox = $_POST['checkbox'];
} else {
    $checkbox = null;
}
if (isset($_POST['longitudLado'])) {
    $longitudLado = (float) ($_POST['longitudLado']);
} else {
    $longitudLado = null;
}
if (isset($_POST['apotema'])) {
    $apotema = (float) ($_POST['apotema']);
} else {
    $apotema = null;
}
if (isset($_POST['button'])) {
    $button = $_POST['button'];
} else {
    $button = null;
}

$segunSu = 'Invalido';
$areaDelRectanguloRegular = null;
// Tomar una decision en base al checkbox.
if ($checkbox === "checkLong"){
    if ($longitudLado){
        $segunSu = "Un octógono con un lado de longitud igual a " . $longitudLado . " cm, tiene un área igual a: ";
        $areaDelRectanguloRegular = (2*pow($longitudLado, 2))/tan(M_PI/8);
    }
}else if ($checkbox === "checkApotema"){
    if ($apotema){
        $segunSu = "Un octógono con un apotema de longitud igual a " . $apotema . " cm, tiene un área igual a: ";
        $areaDelRectanguloRegular =  (8*pow($apotema, 2))*tan(M_PI/8);
    }
}else{

}
?>