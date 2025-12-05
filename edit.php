<?php

require __DIR__ . '/resources/edit.template.php';
require __DIR__ . '/resources/controladores/UserController.php';
require __DIR__ . '/resources/controladores/TaskController.php';
 
 $id = $_GET['id']; 
$task = getTask($id); 
$users = getActiveUsers(); 
 
if ($_POST) { 
    updateTask($id, $_POST); 
    //header("Location: index.php"); 
    exit; 
} 
?> 
<!DOCTYPE html> 
<html> 
<link rel="stylesheet" href="public/assets/style.css"> 
<body> 

  <div class="form-card">
<form method="POST"> 
    <label>Título:</label> 
    <input name="title" value="<?= $task['title'] ?>" required><br> 
 
    <label>Descripción:</label> 
    <textarea name="description"><?= $task['description'] ?></textarea><br> 
 
    <label>Responsable:</label> 
    <select name="user_id"> 
        <?php while($u = $users->fetch_assoc()): ?> 
            <option value="<?= $u['id'] ?>" <?= $u['id']==$task['user_id'] ? 'selected' : '' ?>> 
                <?= $u['name'] ?> 
            </option> 
        <?php endwhile; ?> 
    </select><br> 

    <label>Estado</label>
    <select name="status">
        <option value="pendiente"   <?= $task['status']=='pendiente'   ? 'selected' : '' ?>>Pendiente</option>
        <option value="en_progreso" <?= $task['status']=='en progreso' ? 'selected' : '' ?>>En progreso</option>
        <option value="completada"  <?= $task['status']=='completada'  ? 'selected' : '' ?>>Completada</option>
    </select><br> 
 
    <label>Prioridad:</label> 
    <select name="priority"> 
        <option value="baja"  <?= $task['priority']=='baja' ? 'selected' : '' ?>>Baja</option> 
        <option value="media" <?= $task['priority']=='media' ? 'selected' : '' ?>>Media</option> 
        <option value="alta"  <?= $task['priority']=='alta' ? 'selected' : '' ?>>Alta</option> 
    </select><br> 
 
    <label>Fecha límite:</label> 
    <input type="date" name="deadline" value="<?= $task['deadline'] ?>"><br><br> 
 
    <button type="submit">Actualizar</button> 
</form> 
</div>
</body> 
</html>