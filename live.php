<?php

//ignore_user_abort(); //关掉浏览器,PHP 脚本也可以继续执行.
set_time_limit(0);
// 通过 set_time_limit(0)可以让程序无限制的执行下去
$interval=60*1;
// 每隔 5 分钟运行
do{
//这里是你要执行的代码
echo time().',';

sleep($interval);
}while(true);
