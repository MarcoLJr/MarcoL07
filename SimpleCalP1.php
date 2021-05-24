<?php

    if(isset($_GET['operation'])){
        $Num1= $_GET['Num1'];
        $Num2= $_GET['Num2'];
        $Op= $_GET['operation'];
        
        Switch($Op)
        {
            case 'Add': $Result = $Num1 + $Num2;
            break;
            case 'Sub': $Result = $Num1 - $Num2;
            break;
            case 'Mul': $Result = $Num1 * $Num2;
            break;
            case 'Div': $Result = $Num1 / $Num2;
            break;
        }
    }
?>
<html>
    <head>
        <title> Simple Calculator</title>
    </head>
<body>
    <form action = "<?= $_SERVER['PHP_SELF']?>" method="get">
        <div>
            <label for ="Num1"> Enter Number 1: </label>
            <input type ="number" name = "Num1" id = "Num1">
        </div>
        <br>
        <div>
            <label for ="Num2"> Enter Number 2: </label>
            <input type ="number" name = "Num2" id = "Num2">
        </div>
        <br>
        <div>
            <label for ="Result"> Result: </label>
            <input type ="number" id = "Result" value ="<?= $Result?>" disabled>
        </div>
        <br>
        <div>
            <input type = "submit" value = "Add" name = "operation">  
            <input type = "submit" value = "Sub" name = "operation"> 
            <input type = "submit" value = "Mul" name = "operation"> 
            <input type = "submit" value = "Div" name = "operation"> 
        </div>  
    </form>  
</body>
</html>