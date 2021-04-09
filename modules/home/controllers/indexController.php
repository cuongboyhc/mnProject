<?php

function construct()
{
    load('lib', 'validation');
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction()
{
    unset($_SESSION['user_name']);
    unset($_SESSION['answer1']);
    unset($_SESSION['answer2']);
    if (isset($_POST['btn-submit'])) {
        $error = array();
        global $error;
        if (empty($_POST['user_name'])) {
            $error['user_name'] = "(*) Please enter your name";
        } else {
            if (is_exists('tbl_survey', 'user_name', $_POST['user_name'])) {
                $error['user_name'] = "(*) Name has been existed";
            } else {
                $_SESSION['user_name'] = $_POST['user_name'];
                redirect_to('?mod=home&action=page1');
            }
        }
    }
    load_view('index');
}

function page1Action()
{
    load_view('page1');
}
function page2Action()
{
    load_view('page2');
}

function resultAction()
{
    if (!empty($_SESSION)) {
        $data = array(
            'user_name' => $_SESSION['user_name'],
            'answer1' => $_SESSION['answer1'],
            'answer2' => $_SESSION['answer2']
        );
        if (is_exists('tbl_survey', 'user_name', $_SESSION['user_name'])) {
            db_delete('tbl_survey', "`user_name` = '{$_SESSION['user_name']}'");
            db_insert('tbl_survey', $data);
        } else {
            db_insert('tbl_survey', $data);
        }
    }
    load_view('result');
}
function select_foodAction()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // get data answer by id
        $answer = db_fetch_row("SELECT * FROM `tbl_answer` WHERE `answer_id` = {$id}");
        $_SESSION['answer1'] = $answer['answer_title'];
        redirect_to('?mod=home&action=page2');
    }
}
function select_petAction()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // get data answer by id
        $answer = db_fetch_row("SELECT * FROM `tbl_answer` WHERE `answer_id` = {$id}");
        $_SESSION['answer2'] = $answer['answer_title'];
        redirect_to('?mod=home&action=result');
    }
}
