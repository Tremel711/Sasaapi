<?php

require_once pathinfo(__FILE__)['dirname'] . "/../models/ApiService.php";

class Controller {
    private $apiClient;

    public function __construct() {
        $this->apiClient = new ApiService();
    }

    public function index() {
        $users = $this->apiClient->getUsers();
        $title = "Users";
        include pathinfo(__FILE__)['dirname'] . "/../views/index.php";
    }

    public function showUserPosts($userId) {
        $title = $this->apiClient->getPostUserName($userId);
        $posts = $this->apiClient->getPosts($userId);
        include pathinfo(__FILE__)['dirname'] . "/../views/posts.php";
    }

    public function showPostComments($postId) {
        $title = $this->apiClient->getPostTitle($postId);
        $comments = $this->apiClient->getComments($postId);
        include pathinfo(__FILE__)['dirname'] . "/../views/comments.php";
    }
    
}

?>