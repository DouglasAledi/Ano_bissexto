<?php 

  $ano = $argv[1];
  $div = $ano%4;

  if ($div == 0){
    echo "O ano $ano é bissexto\n";
  }
  else{
    echo "O ano $ano não é bissexto\n";
  }

//Resolução instrutor

$ano = $argv[1];
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "\n $ano é bissexto.";
} else {
    echo "\n $ano não é bissexto.";
}
?>