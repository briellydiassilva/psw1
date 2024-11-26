<?php
    $var = "Bill Gates";
    $tipo = gettype ($var);
    echo "$var". "$tipo"."<br>";
    $var = 12;
    $tipo = gettype ($var);
    echo "$var ($tipo)<br>";
    $var = 3.1415;
    $tipo = gettype($var);
    echo "$var ($tipo)<br>";
    $var = true;
    $tipo = gettype ($var);
    echo "$var ($tipo)<br>";
?>

<?php
$var = null;
 if(is_null($var)) {
 echo "Variável". "\$var é nula/vazia!<br>";
 }
 $var = "Bill GAtes";
 if(is_string($var)) {
 echo "Variável \$var é uma string!<br>";
 }
 $var = 12;
 if(is_integer($var)) {
 echo "Variável \$var é um inteiro!<br>";
 }
 $var = false;
 if(is_bool($var)) {
 echo "Variável \$var é booleana!<br>";
 }
 $var = 1.410;
 if(is_float($var)) {
 echo "Variável \$var é float!"; 
 }
?> 

<?php 
 $nota[0] = "3";
 $nota[1] = "4";
 $nota[2] = "3";
 $nota[3] = "";
 $nota[4] = "5";
 $nota[5] = "";
 $nota[6] = "";
 $nota[7] = "";

if(is_array($nota)){
echo "<br>A nota é:";
echo $nota[3];
echo $nota[1];
}
?> 

