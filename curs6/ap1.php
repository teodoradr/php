<?php

$sir = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore sit eveniet quidem laboriosam consequatur. Quis molestiae reiciendis, debitis libero possimus, provident iusto reprehenderit blanditiis praesentium commodi id tempora voluptatibus fugit.';

echo strlen($sir);
echo "<br>";
echo str_word_count($sir);
echo "<br>";
$arr = str_word_count($sir,1);
echo "<pre>";
print_r($arr);
$arr1 = str_word_count($sir,2);
echo "<pre>";
print_r($arr1);