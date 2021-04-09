<?php

function is_exists($table, $key, $value) {
    $check = db_num_rows("SELECT * FROM `{$table}` WHERE `{$key}` = '{$value}'");
    if ($check > 0) {
        return true;
    }
    return false;
}

function count_result_survey($answer1, $answer2){
    $result = db_num_rows("SELECT * FROM `tbl_survey` WHERE `answer1` = '{$answer1}' AND `answer2` = '{$answer2}' ");
    return $result;
}

function check_selection($answer1, $answer2){
    if(!empty($_SESSION) && $_SESSION['answer1'] == $answer1 && $_SESSION['answer2'] == $answer2)
    return "class = 'bg-info'";
}