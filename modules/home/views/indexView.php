<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter your name</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
    <script src="js/jquery.js"></script>
</head>

<body>
    <div id="wrapper">
        <div id="selection" class="container border rounded border-success mt-5">
            <div class="row">
                <div class="col-md-12 mb-2 text-center">
                    <form action="" method="POST">
                        <p class="title bg-success p-2 border rounded mt-2 mb-3 col-md-8 text-white">Enter your name</p>
                        <?php
                           echo form_error('user_name');
                        ?>
                        <input type="text" class="form-control" id="input-name" placeholder="Name" name="user_name">
                        <input type="submit" class="btn btn-success border rounded mt-3 text-center" name="btn-submit" value="Xác nhận" >
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>