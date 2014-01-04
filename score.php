<?php
//获取成绩信息
$a=file_get_contents('score.txt');
$everyscore=explode('@',$a);
$arr=array();
for($i=0;$i<count($everyscore);$i++){
	$arr[]=explode('&&',$everyscore[$i]);
}
$str=json_encode($arr);
echo $str;