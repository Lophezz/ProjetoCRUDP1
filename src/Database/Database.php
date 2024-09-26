<?php

class Database {
    private static $instance = null;
    private static $banco = __DIR__ . "/DBProdutos.db";
    private $connection;

    private function __construct() {
        $this->connect();
    }

    // Método para obter a instância da conexão (Singleton)
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Conectar ao banco de dados
    private function connect() {
        if (!file_exists(self::$banco)) {
            die("Erro: O banco de dados não foi encontrado.");
        }

        try {
            $this->connection = new PDO("sqlite:" . self::$banco);
            // Configurar erros
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }

    // Obter a conexão
    public function getConnection() {
        return $this->connection;
    }
}

// Uso
$db = Database::getInstance()->getConnection();
