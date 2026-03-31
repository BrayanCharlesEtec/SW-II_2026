<?php

$usuarios = [
    ['id' => 1, 'nome' => 'João Silva', 'email' => 'joao@email.com'],
    ['id' => 2, 'nome' => 'Maria Santos', 'email' => 'maria@email.com'],
    ['id' => 3, 'nome' => 'Pedro Oliveira', 'email' => 'pedro@email.com'],
    ['id' => 4, 'nome' => 'Ana Costa', 'email' => 'ana@email.com'],
    ['id' => 5, 'nome' => 'Carlos Lima', 'email' => 'carlos@email.com']
];

$arquivoUsuarios = 'dados/usuarios.json';

if (!is_dir('dados')) {
    mkdir('dados', 0777, true);
}

if (!file_exists($arquivoUsuarios)) {
    file_put_contents($arquivoUsuarios, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

$jsonConteudo = file_get_contents($arquivoUsuarios);

if ($jsonConteudo === false) {
    exit('Erro ao ler o arquivo usuarios.json');
}

$listaUsuarios = json_decode($jsonConteudo, true);

if ($listaUsuarios === null) {
    die('Erro ao decodificar o JSON: ' . json_last_error_msg());
}

echo "LISTA DE USUÁRIOS\n";
echo "=" . str_repeat("=", 50) . "\n\n";

foreach ($listaUsuarios as $usuario) {
    echo "Nome: " . $usuario['nome'] . "\n";
    echo "Email: " . $usuario['email'] . "\n";
    echo str_repeat("-", 40) . "\n";
}

echo "\nTotal de usuários: " . count($listaUsuarios);
?>