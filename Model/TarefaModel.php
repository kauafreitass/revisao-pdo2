<?php
require_once __DIR__ . '/../config.php'; // Inclui a conexão
class TarefaModel
{
    public function listar()
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM tarefas");
        return $stmt->fetchAll();
    }
    public function criar($descricao)
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO tarefas (descricao) VALUES (?)");
        $stmt->execute([$descricao]);
    }
    
    public function editar($id, $descricao){
        global $pdo;
        $stmt = $pdo->prepare("UPDATE tarefas SET descricao = ? WHERE id = ?");
        $stmt->execute([$descricao,$id]);
    }

    public function deletar($id){
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM tarefas WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>