<?php

// index.php (punto de entrada)

// Carga del controlador
require_once "../app/controllers/Controller.php";

// Crear una instancia del controlador
$controller = new Controller();

// Enrutamiento basado en la solicitud del usuario
if (isset($_GET['user_id'])) {
    // Mostrar los posts del usuario
    $controller->showUserPosts($_GET['user_id']);
} elseif (isset($_GET['post_id'])) {
    // Mostrar los comentarios del post
    $controller->showPostComments($_GET['post_id']);
} else {
    // Mostrar la lista de usuarios por defecto
    $controller->index();
}
?>