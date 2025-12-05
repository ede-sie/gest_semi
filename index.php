<?php

require __DIR__ . '/resources/home.template.php';
require __DIR__ . '/resources/controladores/UserController.php';
require __DIR__ . '/resources/controladores/TaskController.php';

$tasks = getTasks(); 
?> 

<!DOCTYPE html> 
<html> 
<head> 
    <link rel="stylesheet" href="public/assets/style.css"> 
</head> 
<body> 

<table class="tabla-tareas">
    <thead>
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Responsable</th>
            <th>Estado</th>
            <th>Prioridad</th>
            <th>Fecha límite</th>
            <th>Horas transcurridas</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php while($t = $tasks->fetch_assoc()): ?>
        <tr>
            <td><?= $t['title'] ?></td>
            <td><?= $t['description'] ?></td>
            <td><?= $t['user_name'] ?></td>
            <td><?= $t['status'] ?></td>
            <td><?= $t['priority'] ?></td>
            <td><?= $t['deadline'] ?></td>
            <td><?= $t['hours_passed'] ?> h</td>
            <td>
                <a class="btn-edit" href="edit.php?id=<?= $t['id'] ?>">Editar</a>
                <a class="btn-delete" href="delete.php?id=<?= $t['id'] ?>" onclick="return confirm('¿Eliminar tarea?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</body> 
</html> 


