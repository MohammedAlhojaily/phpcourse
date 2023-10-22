<?php
    //Calculator
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $op = $_GET["op"];

    function add($x, $y){
        return $x + $y;
    }
    function sub($x, $y){
        return $x - $y;
    }
    function multi($x, $y){
        return $x * $y;
    }
    function div($x, $y){
        return $x / $y;
    }

        if(!empty($number1) && !empty($number2) && !empty($op) ){

            if($op === "+"){
                $result = add($number1, $number2);
            }elseif($op === "-"){
                $result = sub($number1, $number2);
            }elseif($op === "*"){
                $result = multi($number1, $number2);
            }elseif($op === "/"){
                $result = div($number1, $number2);
            }
        }


        if(empty($number1) ){
            $result = "الرقم الأول فارغ" ; 
        }elseif(empty($number2)){
            $result = "الرقم الثاني فارغ";
        }elseif(empty($op)){
            $result = "يرجى ادخال العملية";
        }else{
            if($op === "+"){
                $result = $_GET["number1"] + $_GET["number2"];
            }elseif($op === "-"){
                $result = $_GET["number1"] - $_GET["number2"];
            }elseif($op === "*"){
                $result = $_GET["number1"] * $_GET["number2"];
            }elseif($op === "/"){
                $result = $_GET["number1"] / $_GET["number2"];
            }
        
        }
        
    
    
   
    
?>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form actions="calc.php" methods="GET" class="form">
            <div>
                <label>الرقم الأول:</label>
                <input type="number"  name="number1"
                class="form-control">
</div>

<div>
    <label>الرقم الثاني:</Label>
    <input type="number"  name="number2"
    class="form-control">
</div>
<br>
<div>
    <label>العملية:</label>
    <input type="text" name="op" class="form-control">
</div>

<br>

<div class="alert alert-success">
    <?php echo $result ?>
</div>

<br>
<input type="submit" class="btn btn-primary">
</form>
</div>
</body>