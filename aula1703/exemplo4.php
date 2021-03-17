<?php
//cardapio
//1.. Big Mac
//2.. Picanha das Galáxias
//3.. Sanduíche de Carne
//4.. Sanduíche de Franco
//receber o numero pedido pelo usuario
$opcao = $argv[1];
//estrutura do comando switch
switch($opcao){
    case 1:
        $escolha = "Sua escolha foi Big Mac - Preço é R$ 10,00 \n";
        break;
    case 2:
        $escolha = "Sua escolha foi Picanha da Galáxia - Preço é R$ 11,00 \n";
        break;
    case 3:
        $escolha = "Sua escolha foi Sanduíche de Carne- Preço é R$ 10,00 \n";
        break;
    case 4:
        $escolha = "Sua escolha foi Sanduíche de Frango- Preço é R$ 12,00 \n";
        break;
    default:
        $escolha = "Sua opção está inválida, veja o cardápio novamente \n";
}
echo $escolha;
