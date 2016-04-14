<?php
define('IN_ECS', true);
include 'cls_pdo.php';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '123456';
$db_name = 'b2c_www';


$db = new cls_pdo($db_host, $db_user, $db_pass, $db_name,'gbk',true);


// $res = $db->query('SELECT * FROM ecs_country');
// $result = $res->fetchAll();
// print_r($result);
$sql = 'SELECT * FROM ecs_country';
$sqlcount = 'SELECT count(*) FROM ecs_country';
// $res = $db->getAll($sql);

$db->setMaxCacheTime(20);
echo $db->getMaxCacheTime();
$res1 = $db->getOne($sqlcount);
print_r($res1);
$res = $db->getOneCached($sqlcount);

echo '------------';
print_r($res);

// $res = $db->table_lastupdate(array('aaa'));

// echo '------------';
// print_r($res);



$res = $db->get_table_name('select * from ecs_goods left join ecs_goods_article on ecs_goods.goods_id=ecs_goods_article.goods_id');
// $res2 = $db->table_lastupdate($res);
echo '------get_table_name------';
print_r($res);
// print_r($res2);


// $res = $db->ping();

// echo '------------';
// print_r($res);


// $res =$db->autoReplace('ecs_keywords', array('date' => date('Y-m-d',time()),
//     'searchengine' => 'ecshop', 'keyword' => addslashes(str_replace('%', '', 'wwaaw')), 'count' => 1), array('count' => 1));
    
// echo '-----autoReplace-------';
// print_r($res);

// $sm = $db->query('UPDATE ecs_a1 SET chandi=3');
// $sm = $db->query($sql);
$sm = $db->query('select * from  ecs_a1 where cangku=2');
echo '--------query----';
print_r($db->num_rows($sm));
echo '--------query----';
// print_r($res);


$res= $db->version();
echo '--------version----';
print_r($res);

