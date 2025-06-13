<?php
/*
Desafio: Gerador de Relatório de Presença em Evento
Você deve criar um script PHP que receba uma lista de participantes de um evento e suas respectivas datas de presença. O script deve gerar um relatório organizado com:

Nome do participante.

Quantidade total de dias presentes.

Lista de datas ordenadas.

Percentual de presença considerando que o evento teve 10 dias.
Para um nível extra, você pode validar se as datas estão dentro do intervalo do evento (de 2025-06-01 a 2025-06-10), e desconsiderar datas inválidas.
 Regras:
Use somente PHP puro.

Ordene as datas.

Use funções nativas (count, sort, implode, etc.).

O número total de dias do evento é 10.

Relatório de Presença - Evento (10 dias)

Participante: Ana
- Dias presentes: 4
- Datas: 2025-06-01, 2025-06-02, 2025-06-04, 2025-06-05
- Presença: 40%

Participante: Bruno
- Dias presentes: 5
- Datas: 2025-06-01, 2025-06-03, 2025-06-04, 2025-06-06, 2025-06-07
- Presença: 50%

Participante: Carlos
- Dias presentes: 0
- Datas: Nenhuma
- Presença: 0%

Participante: Daniela
- Dias presentes: 10
- Datas: 2025-06-01, 2025-06-02, 2025-06-03, 2025-06-04, 2025-06-05, 2025-06-06, 2025-06-07, 2025-06-08, 2025-06-09, 2025-06-10
- Presença: 100%

*/


$participantes = [
    'Ana' => ['2025-06-01', '2025-06-02', '2025-06-04', '2025-06-05'],
    'Bruno' => ['2025-06-01', '2025-06-03', '2025-06-04', '2025-06-06', '2025-06-07'],
    'Carlos' => [],
    'Daniela' => ['2025-06-01', '2025-06-02', '2025-06-03', '2025-06-04', '2025-06-05', '2025-06-06', '2025-06-07', '2025-06-08', '2025-06-09', '2025-06-10'],
];


function eventPresenc($participantes){
    $diasEvent=17;
   
    foreach ($participantes as $pessoas => $datas){             
        $diasPresentes = count($datas);
        $dataFormatada = implode(", ",$datas);   
        $percentualPresen = number_format(($diasPresentes/$diasEvent) *100,1);
        echo "Participante: $pessoas\n";
        echo "- Dias presentes: $diasPresentes\n";
        echo "- Datas: $dataFormatada\n";
        echo "- Presença: $percentualPresen%\n";
       
    }
     
    
}

eventPresenc($participantes);