<?php

require_once "../app/controllers/Controller.php";

$controller = new Controller();

// Enrutamiento basado en la solicitud del usuario
if (isset($_GET['user_id'])) {
    
    $controller->showUserPosts($_GET['user_id']);
} elseif (isset($_GET['post_id'])) {
   
    $controller->showPostComments($_GET['post_id']);
} else {
   
    $controller->index();
}
?>