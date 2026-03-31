<?php

$produtos = [
    [
        'nome' => 'Notebook Dell',
        'preco' => 3500.00,
        'quantidade' => 10
    ],
    [
        'nome' => 'Mouse Logitech',
        'preco' => 89.90,
        'quantidade' => 50
    ],
    [
        'nome' => 'Teclado Mecânico',
        'preco' => 299.90,
        'quantidade' => 25
    ]
];

$jsonProdutos = json_encode($produtos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

if ($jsonProdutos === false) {
    die('Erro ao codificar o JSON: ' . json_last_error_msg());
}

$arquivo = 'dados/produtos.json';

if (!is_dir('dados')) {
    mkdir('dados', 0777, true);
}

if (file_put_contents($arquivo, $jsonProdutos)) {
    echo "Arquivo produtos.json criado com sucesso!\n\n";
    echo "Conteúdo do arquivo:\n";
    echo $jsonProdutos;
} else {
    echo "Erro ao salvar o arquivo produtos.json";
}
?>