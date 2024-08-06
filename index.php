<?php
require 'database/Database.php';

$db = new Database();
$conn = $db->getConnection();

if ($conn) {
    echo "Conexão estabelecida com sucesso!";
} else {
    echo "Falha na conexão.";
}