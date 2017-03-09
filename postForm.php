<?php
     

require_once 'meekrodb.2.3.class.php';
DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'MicroBlog';

DB::debugMode();

$microBlog = $_POST['microBlog'];

DB::insert('MicroBlog', array(
                'post' => $microBlog)
);

header('Location: /microBlog/hello.php');

?>

