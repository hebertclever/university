<?php
function loadEnv($path) {
    if (!file_exists($path)) {
        die("Arquivo .env não encontrado");
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false) {
        die("Não foi possível ler o arquivo .env");
    }

    foreach ($lines as $line) {
        list($name, $value) = explode('=', $line, 2);
        $_ENV[$name] = $value;
    }

    return true;
}
