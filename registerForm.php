<?php
        require_once 'meekrodb.2.3.class.php';
        DB::$user = 'root';
        DB::$password = '';
        DB::$dbName = 'MicroBlog';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);  //encrypt with hash

        DB::insert('Credentials', array(
                'username' => $username,
                'password' => $hash
        ));

        header('Location: /microBlog/hello.php');
?>