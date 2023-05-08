<head>
    <title>Online PHP Script Execution</title>
</head>
<body>
    <?php
    $x = 5+6;
    If ($x==10)
    echo $x;
    else
    echo "Greater than 10<br>";
    ?>

    <?php
    $t = date("H");

    if($t < "10") {
        echo "Have a good morning!";
    }
    elseif ($t <"20"){
        echo "Have a good day!";
    }
        else{
            echo "Have a good night!";
        
        
    }
    ?>