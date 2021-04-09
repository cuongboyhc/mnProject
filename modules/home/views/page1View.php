<?php
// get answer data
$answer = db_fetch_array("SELECT * FROM `tbl_answer` WHERE `question_id` = 1");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
    <script src="js/jquery.js"></script>
</head>

<body>
    <div id="wrapper">
        <div id="selection" class="container">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <p class="title bg-success p-2 border rounded mt-2 mb-3 col-md-8 text-white">Choose your favorite food</p>
                </div>
                <?php
                foreach ($answer as $item) {
                ?>
                    <div class="col-md-4">
                        <div class="item border rounded mb-2 <?php if(isset($_SESSION['answer1']) && $_SESSION['answer1'] == $item['answer_title']) echo "border-success" ?>">
                            <img src="<?php echo $item['answer_thumb'] ?>" alt="" class="img-fluid mb-2 text-left">
                            <p class="item-title pl-3"><?php echo $item['answer_title'] ?></p>
                            <p class="item-decription pl-3"><?php echo $item['description'] ?></p>
                            <a href="?mod=home&action=select_food&id=<?php echo $item['answer_id'] ?>">
                               <button class="btn btn-primary submit">Select</button>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>