<?php
/**
 * Created by PhpStorm.
 * User: JONE
 * DateTime: 2018/9/29 22:27
 * Email: abc@jone.xyz
 * Description: 入口页
 */



require_once './lib/autoload.php';

$mysql = Db::init();

$res = $mysql->tableName('a1')->where(1)->delete();
echo '<pre>';
var_dump($res);