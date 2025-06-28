
<?php
/*
💻 Desafio: Sistema de Ranking de Usuários
Você deve criar um sistema que:

Receba uma lista de usuários com nome, pontuação e data da última atividade.

Calcule um ranking dos usuários baseado na pontuação (maior primeiro).

Exclua do ranking os usuários que estão inativos há mais de 30 dias.

Exiba o ranking em ordem, com as posições.

🧾 Regras
Utilize classes e funções.

A data da última atividade será fornecida no formato Y-m-d.

O sistema deve ser executado em uma única página PHP.
Ranking de Usuários Ativos:
1. Ana - 220 pontos
2. Maria - 200 pontos
💡 Dica
Você pode criar uma classe Usuario com os atributos e uma classe Ranking com os métodos de filtragem e ordenação.
*/

$usuarios = [
    ['nome' => 'João', 'pontuacao' => 150, 'ultima_atividade' => '2025-05-01'],
    ['nome' => 'Maria', 'pontuacao' => 200, 'ultima_atividade' => '2025-06-08'],
    ['nome' => 'Carlos', 'pontuacao' => 180, 'ultima_atividade' => '2025-04-15'],
    ['nome' => 'Ana', 'pontuacao' => 220, 'ultima_atividade' => '2025-06-10'],
];
$usuariosAtivos = [];
$dataAtual = new DateTime(); // data de hoje
foreach ($usuarios as $usuario) {
    $ultimaAtividade = new DateTime($usuario['ultima_atividade']);
    $diferencaDias = $dataAtual->diff($ultimaAtividade)->days;//aqui pega os dias da ultima atividade   
    if ($ultimaAtividade <= $dataAtual && $diferencaDias <= 30) {
         $usuariosAtivos[] = $usuario;
    
       
        echo "Nome: " . $usuario['nome'] .' Pontos ' .$usuario['pontuacao']. "\n";    
    }
    
}


