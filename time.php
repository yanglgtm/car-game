<?php
//记录游戏此时
$a=file_get_contents('time.txt');
file_put_contents('time.txt',($a+1));