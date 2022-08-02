<html>
    
<Body>

    <form method ="POST">
        <label>ingresa un numero entero: </label>
        <input type ="text" name ="entrada"> 
        <br>
        <button tyoe ="submit">Calcular</button>
        <br>
        <label>El resultado es : </label>
     </form>

</Body>

</html>


<?php
$m = $_POST['entrada'];
function factorial($n){
if($n == 0 || $n == 1){
return 1;
}else
return $n*factorial($n-1);
}
echo factorial($m);

?>