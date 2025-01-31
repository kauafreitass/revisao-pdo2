<?php
require_once __DIR__ . '/../Model/TarefaModel.php';
class TarefaController
{
    public function index()
    {
        $tarefa = new TarefaModel();
        $tarefas = $tarefa->listar();
        require_once __DIR__ . '/../View/tarefas/index.php';
    }

    public function criar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $descricao = $_POST['descricao'];
            $tarefa = new TarefaModel();
            $tarefa->criar($descricao);
            header('Location: /revisaopdo2'); // Redireciona após criar
        } else {
            header('Location: /revisaopdo2/View/tarefas/criar.php');
        }
    }

    public function editar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $descricao = $_POST['descricao'];
            $id = $_POST['id'];
            $tarefa = new TarefaModel();
            $tarefa->editar($id, $descricao);
            header('Location: /revisaopdo2'); // Redireciona após criar
        } else {
            header('Location: /revisaopdo2/View/tarefas/editar.php');
        }
    }

    public function deletar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $tarefa = new TarefaModel();
            $tarefa->deletar($id);
            header('Location: /revisaopdo2'); // Redireciona após criar
        } else {
            header('Location: /revisaopdo2/View/tarefas/index.php');
        }
    }
}