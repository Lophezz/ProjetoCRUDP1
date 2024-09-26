<?php
require_once __DIR__ . '/src/Database/Database.php'; // Ajuste o caminho conforme necessário

try {
    $db = Database::getInstance()->getConnection();
    echo "Conexão bem-sucedida!";
} catch (Exception $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
?>
