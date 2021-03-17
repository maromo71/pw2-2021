<?php
$str_quantidade = "100";
$custa = 11.89;
$quantidade = (int)$str_quantidade; //casting - conversão
$preco_total = $quantidade * $custa;
echo "O Valor total da compra: $preco_total \n";