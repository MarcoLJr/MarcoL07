<?php
    
    if(isset($_GET['operation'])){
        $Fnum = $_GET['Fnum'];
        $Snum = $_GET['Snum'];
        $Op = $_GET['operation'];

    switch($Op){
            case 'add' : $result = $Fnum + $Snum;
            break;
            case 'sub' : $result = $Fnum - $Snum;
            break;
            case 'mul' : $result = $Fnum * $Snum;
            break;
            case 'div' : $result = $Fnum / $Snum;
            break;
    }
    }

<html>
    <head>
        <title>Simple Calculator PHP </title>
    </head>
    <body>
        
        <form center action = "" method= "get">
            <div>
                <label for = "Fnum">Enter Number 1:</label>
                <input type="number" name ="FirstNum" id = "Fnum">
            </div>
            <br>
            <div>
                <label for = "Snum">Enter Number 2:</label>
                <input type="number" name ="SecondNum" id = "Snum">
            </div>
            <br>
            <div>
                <label for = "Reesult">Result</label>
                <input type="number" name ="FirstNum" id = "Result" value = "<? = $result ?>" disabled>
            </div>
            <br>
            <div>
                 <input type ="submit" value ="add" name ="operation">
                 <input type ="submit" value = "sub" name = "operation">
                 <input type ="submit" value ="mul" name ="operation">
                 <input type ="submit" value ="div" name ="operation">
            </div>
        </form>
        
    </body>
</html>