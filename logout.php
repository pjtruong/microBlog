<?php
session_start();
session_destroy();
header('Location: /microBlog/hello.php');
?>