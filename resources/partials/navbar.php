

</nav>  

<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl flex h-16 items-center justify-center">
        <div class="flex gap-4">
            <a href="./"          class="<?= $_SERVER['REQUEST_URI'] === '/'             ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">GESTOR DE TAREAS</a>
            <a href="./crear.php"  class="<?= $_SERVER['REQUEST_URI'] === '/crear.php'  ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Crear tarea</a>
            
    </div>
</nav>