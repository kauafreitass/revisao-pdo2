<?php require_once __DIR__ . '/../layout.php'; ?>
<h2>Tarefas</h2>
<a href="/revisaopdo2/View/tarefas/criar.php">Criar Tarefa</a>
<ul>
    <?php foreach ($tarefas as $tarefa): ?>
        <li><?= $tarefa['descricao']; ?> - <a href="/revisaopdo2/View/tarefas/editar.php?id=<?=
               $tarefa['id']; ?>">Editar</a></li>
    <?php endforeach; ?>
</ul>