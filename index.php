<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./img/pexels-pixabay-53621.jpg">
</head>

<body>

    <div class="cal-pix">



        <div class="image">
            <h1>CAL<span>CULATOR</span> <sup><small><i>2</i></small></sup></h1>


        </div>

        <div class="parent">

            <form action="" method="GET">
                <input type="text" placeholder="input first number" name="first">
                <br>

                <select name="operator" id="">
                    <option></option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>

                <br>

                <input type="text" placeholder="input second number" name="second">

                <br>

                <input type="submit" value="=" name="submit">

                <?php

                if (isset($_GET['submit'])) {

                    $first = $_GET['first'];
                    $second = $_GET['second'];
                    $operator = $_GET['operator'];

                    if ($first == false && $second == false && $operator == false) {

                        echo 'Enter first and second number';
                    } elseif ($first == false) {
                        echo 'Enter first number';
                    } elseif ($second == false) {
                        echo 'Enter second number';
                    } elseif ($operator == true && $first = false && $second == false) {
                        echo 'Enter first and second number';
                    }


                    switch ($operator) {
                        case '+':
                            echo $first + $second;
                            break;

                        case '-':

                            echo $first - $second;

                            break;

                        case '*':
                            echo $first * $second;
                            break;

                        case '/':
                            echo $first / $second;
                            break;

                        default:
                            echo '<br>';
                            echo 'Select an operator';
                            break;
                    }
                }


                ?>

            </form>
        </div>

    </div>





</body>

</html>