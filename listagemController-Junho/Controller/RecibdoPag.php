<?php
/*
$alunos = [
    ['nome' => 'João', 'notas' => [8, 6, 7]],
    ['nome' => 'Maria', 'notas' => [4, 5, 6]],
    ['nome' => 'Lucas', 'notas' => [3, 4, 2]],
];




foreach($alunos as $key => $value){
    $nome=$alunos[$key]['nome'];
    $nota=soma($alunos[$key]['notas']);      
    echo 'Aluno: '. $nome . "\n";
    echo 'Nota: '.implode(', ',$alunos[$key]['notas'])."\n";

    //echo "Notas: " . implode(', ', $aluno['notas']) . "\n";

}

function soma($notas) {
    $total = 0;
    foreach ($notas as $nota) {
        $total += $nota;
    }
    return $total;
}
*/


/*
Use foreach para exibir cada produto.

Use for dentro do foreach para repetir o nome do produto pela quantidade.

Crie uma função calcularTotal() que receba os produtos e retorne o total.

Crie outra função aplicarDesconto($total, $cupom) que aplique um dos cupons válidos.

Use while para repetir a exibição final 3 vezes (como se fosse imprimir 3 vias do recibo).
*/
$produtos = [
    ['nome' => 'Camiseta', 'preco' => 50, 'quantidade' => 0],
    ['nome' => 'Calça', 'preco' => 80, 'quantidade' => 0],
    ['nome' => 'Boné', 'preco' => 30, 'quantidade' => 0]
];

function MostrarProduto($produtos,$qtd,$desconto){
        $nomeProduto =array();
        $valorProduto =array();
        $total =0;
        foreach($produtos as $produto){
            for($x=0;$x<$qtd;$x++){
                $nomeProduto[]=$produto['nome'];                    
            }
            $valorProduto=CalcularTotal($produto['preco'],$qtd);
            $total = $valorProduto + $total;

        }
              
        if(!empty($desconto) ){
            $valorDesconto = ($total * $desconto) / 100;
            $valorFinal = $total - $valorDesconto ;
        }

        
        $iten = implode("\n",$nomeProduto);

        echo $iten . "\n";
        echo "-------------------\n";
        echo "Total: R$ " . number_format($total, 2, ',', '.') . "\n";

        if (!empty($desconto)) {
            echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . "\n";
            echo "Total com Desconto: R$ " . number_format($valorFinal, 2, ',', '.') . "\n";
        }
}

function calcularTotal($preco, $quantidade) {
    return $preco * $quantidade;
}


$contador = 1;
while ($contador <= 3) {
    echo "\n*** Recibo $contador ***\n";
    MostrarProduto($produtos,3, 10); // Ex: 10% de desconto
    $contador++;
}
