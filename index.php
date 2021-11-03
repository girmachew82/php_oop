<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    
     <form action="" method="post">
       <input type="number" name="num1" id="">
       <input type="number" name="num2" id="">
       <input type="submit" value="+" name ='add'>
        <input type="submit" value="-" name ='sub'>
       <input type="submit" value="*" name ='mul'>
     <input type="submit" value="/" name ='div'>
    </form>
<?php
include_once 'simpleCalculator.php';
$obj = new SimpleCalculator();
    if(isset($_POST['add']))
    {
    $num1= $_POST['num1'];
    $num2= $_POST['num2'];
    $result = $obj->add($num1,$num2);
    ?>
    <input type="number" name="result" id="" value='<?php echo $result?>'>
    <?php
    }
    if(isset($_POST['sub']))
    {
    $num1= $_POST['num1'];
    $num2= $_POST['num2'];
    $result = $obj->sub($num1,$num2);
    ?>
    <input type="number" name="result" id="" value='<?php echo $result?>'>

    <?php
    }

    if(isset($_POST['mul']))
    {
    $num1= $_POST['num1'];
    $num2= $_POST['num2'];
    $result = $obj->mul($num1,$num2);
    ?>
    <input type="number" name="result" id="" value='<?php echo $result?>'>
    <?php
    }

    if(isset($_POST['div']))
    {
    $num1= $_POST['num1'];
    $num2= $_POST['num2'];
    $result = $obj->div($num1,$num2);
    ?>
    <input type="number" name="result" id="" value='<?php echo $result?>'>
    <?php
    }
    ?>


</body>
</html>
