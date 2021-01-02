<?php
	session_start();
	include_once "../inc/dbh.php";
	if($_SESSION['user_id'] != 1) {
        header("location:javascript://history.go(-1)");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        body {
            background-color: lightgrey;
        }
        form {
            width: 300px;
            height: 150px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: lightgreen;
            text-align: center;
            border-radius: 10px;
        }
        input {
            box-sizing: border-box;
            width: 200px;
            height: 35px;
            margin-bottom: 10px;
            margin-top: 30px;
        }
        button {
            box-sizing: border-box;
            width: 200px;
            height: 40px;
            padding: 10px 10px;
            font-size: 14px;
            color: #fff;
            background: #00c292;
            border: 1px solid #00c292;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="./modify-page.php" method='post'>
        <input type="text" name="post_id" placeholder='판매글 ID'><br>
        <button name='btn'>수정하기</button>
    </form>
</body>
</html>

