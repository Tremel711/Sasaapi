<?php

class ApiService
{
    public function getUsers()
    {
        $url = "https://jsonplaceholder.typicode.com/users";
        $response = file_get_contents($url);
        $result = json_decode($response, true);
        return $result;
    }

    public function getPosts($userId)
    {
        $url = "https://jsonplaceholder.typicode.com/posts?userId=" . $userId;
        $response = file_get_contents($url);
        $result = json_decode($response, true);
        return $result;
    }

    public function getComments($postId)
    {
        $url = "https://jsonplaceholder.typicode.com/comments?postId=" . $postId;
        $response = file_get_contents($url);
        $result = json_decode($response, true);
        return $result;
    }
    public function getPostUserName($userId)
    {
        $url = "https://jsonplaceholder.typicode.com/users/" . $userId;
        $response = file_get_contents($url);
        $result = json_decode($response, true);
        return $result['name'];
    }

    public function getPostTitle($postId)
    {
        $url = "https://jsonplaceholder.typicode.com/posts/" . $postId;
        $response = file_get_contents($url);
        $result = json_decode($response, true);
        return $result['title'];
    }
    /* public function getPostExcerpt($postId)
    {
        $url = "https://jsonplaceholder.typicode.com/posts/" . $postId;
        $response = file_get_contents($url);
        $result = json_decode($response, true);
        return $result;
    } */
}
