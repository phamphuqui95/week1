<!DOCTYPE html>
<html>
<head>
    <title>Calculation App</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .container{
            background:white;
            width:500px;
            padding:30px;
            border-radius:20px;
            box-shadow:0 10px 25px rgba(0,0,0,0.2);
        }

        h1{
            text-align:center;
            margin-bottom:25px;
            color:#333;
        }

        .input-group{
            margin-bottom:20px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-weight:bold;
            color:#444;
        }

        input[type="text"]{
            width:100%;
            padding:12px;
            border:2px solid #ccc;
            border-radius:10px;
            font-size:16px;
            transition:0.3s;
        }

        input[type="text"]:focus{
            border-color:#2193b0;
            outline:none;
            box-shadow:0 0 10px rgba(33,147,176,0.3);
        }

        .button-group{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:12px;
            margin-top:20px;
        }

        input[type="submit"]{
            padding:12px;
            border:none;
            border-radius:10px;
            background:#2193b0;
            color:white;
            font-size:15px;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s;
        }

        input[type="submit"]:hover{
            background:#176d82;
            transform:scale(1.03);
        }

        .result{
            margin-top:25px;
            background:#f3f9fb;
            padding:15px;
            border-left:5px solid #2193b0;
            border-radius:10px;
            font-size:20px;
            color:#333;
            text-align:center;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Calculation App</h1>

    <form action="index.php" method="post">

        <div class="input-group">
            <label>Input 1</label>

            <input type="text" 
            name="input1"
            value="<?php if(isset($input1)) echo $input1; ?>">
        </div>

        <div class="input-group">
            <label>Input 2</label>

            <input type="text" 
            name="input2"
            value="<?php if(isset($input2)) echo $input2; ?>">
        </div>

        <div class="button-group">

            <input type="submit" name="area" value="Area">

            <input type="submit" name="perimeter" value="Perimeter">

            <input type="submit" name="average" value="Average">

            <input type="submit" name="bmi" value="BMI">

            <input type="submit" name="minute" value="Minutes">

            <input type="submit" name="max" value="Max Value">

        </div>

    </form>

    <div class="result">

        <strong>Result:</strong>

        <?php
            if(isset($result))
            {
                echo " " . $result;
            }
        ?>

    </div>

</div>

</body>
</html>