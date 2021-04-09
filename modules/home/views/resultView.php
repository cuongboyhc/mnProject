<?php
// get answer data
$survey = db_fetch_array("SELECT * FROM `tbl_survey`");
$answer1 = db_fetch_array("SELECT * FROM `tbl_answer` where `question_id` = 1");
$answer2 = db_fetch_array("SELECT * FROM `tbl_answer` where `question_id` = 2");

$answer = array_merge($answer1, $answer2);
// show_array($answer);

// show_array($answer);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
    <script src="js/jquery.js"></script>
</head>

<body>
    <div id="wrapper">
        <div id="selection" class="container">
            <div class="row">
            <p class="title bg-success p-2 border rounded mt-2 mb-3 col-md-8 text-white">Compare your result</p>
                <div class="col-md-12 mb-2">
                    <table class="table border mt-4 text-center col-md-12">
                        <tbody>    
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Chocolate</th>
                                <th scope="col">Banana</th>
                                <th scope="col">Fried chicken</th>
                            </tr>
                            <tr>
                                <th scope="row">Dog</th>
                                <td <?php echo check_selection('Chocolate','Dog');?> ><?php echo count_result_survey('Chocolate','Dog'); ?></td>
                                <td <?php echo check_selection('Banana','Dog');?>><?php echo count_result_survey('Banana','Dog'); ?></td>
                                <td <?php echo check_selection('Fried chicken','Dog');?>><?php echo count_result_survey('Fried chicken','Dog'); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Cat</th>
                                <td <?php echo check_selection('Chocolate','Cat');?>><?php echo count_result_survey('Chocolate','Cat');?></td>
                                <td <?php echo check_selection('Banana','Cat');?>><?php echo count_result_survey('Banana','Cat'); ?></td>
                                <td <?php echo check_selection('Fried chicken','Cat');?>><?php echo count_result_survey('Fried chicken','Cat'); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Hamster</th>
                                <td <?php echo check_selection('Chocolate','Hamster');?>><?php echo count_result_survey('Chocolate','Hamster'); ?></td>
                                <td <?php echo check_selection('Banana','Hamster');?>><?php echo count_result_survey('Banana','Hamster'); ?></td>
                                <td <?php echo check_selection('Fried chicken','Hamster');?>><?php echo count_result_survey('Fried chicken','Hamster'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-md-12 text-center">
                    <a href="?mod=home&action=page2">
                        <button class="btn btn-warning back bg-danger text-white mt-4">Back</button>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>