<?php

require __DIR__ . '/resources/crear.template.php';
require __DIR__ . "../resources/controladores/UserController.php"; 
require __DIR__ . "../resources/controladores/TaskController.php"; 
 
$users = getActiveUsers(); 
 
if ($_POST) { 
    if (empty($_POST['title'])) { 
        $error = "El título es obligatorio"; 
    } else { 
        createTask($_POST); 
        //header("Location: index.php"); 
        exit; 
    } 
} 
?> 
<!DOCTYPE html> 
<html> 
<link rel="stylesheet" href="public/assets/style.css"> 
<body> 

 
<?php if(isset($error)) echo "<p class='error'>$error</p>"; ?> 


 <div class="form-card">
<form method="POST"> 

    <label>Título:</label> 
    <input name="title" required>

    <label>Descripción:</label> 
    <textarea name="description"></textarea>

    <label>Responsable:</label> 
    <select name="user_id"> 
        <?php while($u = $users->fetch_assoc()): ?> 
            <option value="<?= $u['id'] ?>"><?= $u['name'] ?></option> 
        <?php endwhile; ?> 
    </select>

    <label>Estado:</label>
    <select name="status">
        <option value="pendiente">Pendiente</option>
        <option value="en_progreso">En progreso</option>
        <option value="completada">Completada</option>
    </select>

    <label>Prioridad:</label> 
    <select name="priority"> 
        <option value="baja">Baja</option> 
        <option value="media">Media</option> 
        <option value="alta">Alta</option> 
    </select>

    <label>Fecha límite:</label> 
    <input type="date" name="deadline">

    <button type="submit">Guardar</button> 
</form>
</div>

</form>
</body> 
</html> 
 