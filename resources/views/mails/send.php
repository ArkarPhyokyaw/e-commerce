<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        h2{
            line-height: 150px;
            color: #fff;
            background-color: #55cbd5;
        }
        p{
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    <h2>welcome my website</h1>
    <p>
    <?php echo $content;?>
    </p>
    <img src="<?php echo $img_link?>" alt="" width="400" height="400">
</body>
</html>