<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'local_db');

/*define('DB_SERVER', 'tutorial-db-instance.clxfjeoiuyjf.ap-southeast-2.rds.amazonaws.com');
define('DB_USERNAME', 'tutorial_user');
define('DB_PASSWORD', 'tutorial_user');
define('DB_DATABASE', 'sample');*/

function getDatabaseConnection()
{
    header("content-type/html; characset=utf-8");
    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
    mysqli_set_charset($connection, 'utf-8');
    mysqli_select_db($connection, 'waves');
    return $connection;
}

function getDataArray($query)
{
    $connection = getDatabaseConnection();
    $result = mysqli_query($connection, $query);
    $dataArray = mysqli_fetch_all($result);
    return $dataArray;
}

// get beach list
///*function getBeachArray()
//{
//    $query = "select id, name, lat, lon from beach order by name";
//    $result = getDataArray($query);
//    return $result;
//}
//
//// get beach-warning bridge
//function getBeachAndWarningArray()
//{
//    $query = "select * from beach_warning_bridge order by warning_id";
//    $result = getDataArray($query);
//    return $result;
//}
//
//// get beach-activity bridge
//function getBeachAndActivityArray()
//{
//    $query = "select * from beach_activity_bridge order by activity_id";
//    $result = getDataArray($query);
//    return $result;
//}
//
//// journey page
//// get quiz list
//function getQuizQuestions()
//{
//
//    $query = "select * from quiz";
//    $result = getDataArray($query);
//    return $result;
//}
//
//// get activity list
//function getActivityArray()
//{
//    $query = "select * from activity where activity_id != 9 order by activity_id";
//    $result = getDataArray($query);
//    return $result;
//}
//
//// query 1: get beach-activity list
//function getData1()
//{
//    $query = "select b.name, bab.activity_name
//                from beach b, beach_activity_bridge bab
//                where b.id = bab.beach_id
//                order by hazard_rating";
//    /*$query = "select beach_id, beach_name,
//              group_concat(activity_name order by activity_id separator '_')
//              as activity_list
//              from beach_activity_bridge
//              group by beach_id";*/
//    $result = getDataArray($query);
//    return $result;
//}
//
//// query 2: get beach-activity details list
//function getData2()
//{
//    $query = "select bab.beach_name, bab.activity_id, bab.activity_name, a.meature
//                from beach_activity_bridge bab, activity a
//                where bab.activity_id = a.activity_id
//                order by bab.beach_id";
//    $result = getDataArray($query);
//    return $result;
//}
//
//
//// get pool list
//function getPool()
//{
//    $query = "select * from swimming_pool";
//    $result = getDataArray($query);
//    return $result;
//}
//
//// get suburb list
//function getSuburb()
//{
//    $query = "select distinct suburb, postcode from swimming_pool order by postcode";
//    $result = getDataArray($query);
//    return $result;
//}
//
//// to String
//function toString($array)
//{
//    $array2 = array();
//    for ($i = 0; $i < count($array); $i++) {
//        $temp = implode("+", $array[$i]);
//        array_push($array2, $temp);
//    }
//    $string = implode("|", $array2);
//    return $string;
//}*/

?>