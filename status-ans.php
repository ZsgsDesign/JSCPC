<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

////////////////////////////Common head
        $cache_time=2;
        $OJ_CACHE_SHARE=false;
    require_once('./include/db_info.inc.php');
        require_once('./include/setlang.php');
        $view_title= "$MSG_STATUS";


require_once("./include/const.inc.php");

if (isset($_GET['sid'])) {
    $sid=intval($_GET['sid']);
    $sql_lock="SELECT * FROM `solution` LEFT JOIN `source_code` ON `solution`.`solution_id`=`source_code`.`solution_id` WHERE `solution_id`=?";
    $result=pdo_query($sql_lock, $sid) ;
    var_dump($result[0]);
}