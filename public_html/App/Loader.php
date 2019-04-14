<?php

require 'Db.php';
require 'Classes/Article.php';
require 'Classes/Articles.php';
require 'Classes/Blog.php';
require 'Classes/Blogs.php';
require 'Classes/Diary.php';
require 'Classes/Diaries.php';
require 'Classes/Message.php';
require 'Classes/Messages.php';
require 'Classes/Music.php';
require 'Classes/Musics.php';
require 'Classes/Page.php';
require 'Classes/Pages.php';
require 'Classes/Tuto.php';
require 'Classes/Tutos.php';
require 'Classes/User.php';
require 'Classes/Users.php';

function debug($variable){
    echo '<pre>' . print_r($variable, true) . '</pre>';
}

function str_random($length){
    $alphabet = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
}
