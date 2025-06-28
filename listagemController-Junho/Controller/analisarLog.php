<?php
/*
Crie uma função gerarRanking($vendas) que:

Use foreach para calcular o total de vendas de cada vendedor.

Armazene o nome e o total em um novo array associativo ([nome => total]).

Ordene o array final do maior total para o menor.

Exiba o ranking formatado com posição, nome e valor total vendido.

Exemplo de saída:

1º lugar: carlos - R$ 1000
2º lugar: maria - R$ 800
3º lugar: joao - R$ 450
4º lugar: ana - R$ 340
🏆 Melhor vendedor da semana: carlos com R$ 1000 em vendas!

*/
$vendas = [
  "joao" => [100, 200, 150],
  "maria" => [500, 300],
  "ana" => [50, 80, 120, 90],
  "carlos" => [1000],
];

function meta($vendas){
    $maiores = [];//crio array

    // Pega o maior valor de cada vendedor
    foreach ($vendas as $vendedor => $valores) {        
        $maiores[$vendedor] = somarVendas($valores);//pega os vendedores e os valroes para cada        
    }
   

    arsort($maiores);

    // Exibe o resultado
    $pos= 1;
    foreach ($maiores as $vendedor => $maior) {
     //   var_dump($maior);
        echo $pos."° lugar: $vendedor - R$ $maior\n";
        $pos++;
       
    }
    
}

function somarVendas($valor){
    $totalVendas = 0;
    foreach($valor as $value){
        $totalVendas += $value;
    }
    return $totalVendas;    

}

meta($vendas);