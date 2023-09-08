<?php

function uploadFile($file, $dir = "../../uploads")
{
    $photo = null;

    if ($file['error'] === UPLOAD_ERR_OK) {
        if ($file['size'] > 200000) {
            return "A imagem é muito grande (limite de 200KB).";
        }

        $uploadDir = __DIR__ . "/$dir";
        $uploadFile = $uploadDir . basename($file['name']);
        $imageFileType = pathinfo($uploadFile, PATHINFO_EXTENSION);

        if (!in_array($imageFileType, ["jpg", "jpeg", "png"])) {
            return "Formato de arquivo não suportado.";
        }

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            $photo = basename($file['name']);
        } else {
            return "Ocorreu um erro ao carregar a imagem.";
        }
    }

    return $photo;
}
