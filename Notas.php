<?php
/*
$alunos = [
    ['nome' => 'João', 'notas' => [8, 6, 7]],
    ['nome' => 'Maria', 'notas' => [4, 5, 6]],
    ['nome' => 'Lucas', 'notas' => [3, 4, 2]],
];
*/
$alunos = [
    [
        'nome' => 'João',
        'notas' => [8, 6, 7]
    ],
    [
        'nome' => 'Maria',
        'notas' => [4, 5, 6]
    ],
    [
        'nome' => 'Lucas',
        'notas' => [3, 4, 2]
    ],
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



   