<html>
<head>
    <style>
        .display {
            height:200px;width: 300px;
            margin: 0;
            padding: 10px;
            border: 1px dodgerblue solid ;
            text-align: left;
        }
        h2 {
            color: darkblue;
        }
    </style>
</head>
<body>
<?php
     $rate = "%";
     $usd = "$";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $investment = $_POST["investment"];
         $rate = $_POST["rate"];
         $number = $_POST["number"];

         $futurevalue = $investment * (1 + ($rate / 100)) ** $number;
 }
?>
<form method="post">
<div class="display">
    <div><h1>Future Value Calculator</h1></div>
    <div>
        <span>Investment Amount:
            <?php
            echo $investment;
            ?>
        </span>
    </div>
    <div>
        <span>Yearly Interest Rate:
            <?php
            echo $rate;
            ?>
        </span>
    </div>
    <div>
        <span>Number Of Year:
            <?php
            echo $number;
            ?>
        </span>
    </div>
    <div>
    <span>
        Future Value:
        <?php
        echo $futurevalue;
        ?>
        </span>
    </div>
</div>
</form>
</body>
</html>