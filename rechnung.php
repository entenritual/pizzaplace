<!DOCTYPE html>

<html>
<head>
    <title>Pizza Place</title>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body style="text-align: right;  " >
    
   <div id="wrapper">
    <div class="grid-container">
    
    
   
        <div class='grid-top'><img src='bilder/topbanner.jpg'></div>
        <div class='grid-login'>Login Logout</div>
        <div class='grid-content'>
          
           
            
        <h1 style='text-align: center; '>Rechnung:</h1>
        <form action="bestellen.php" method="post">

        <div id="rechnung" style="padding-right: 40%;" >

        <?php

$summe = 0;


foreach($_POST["pizza1"] as $p){
    echo("Pizza Supreme Chicken 5,99€ <br> ");
    $summe += 5.99;
    foreach($p as $aus){
        if ($aus == "knoblauch"){
            echo("Knoblauch 0,99€ <br>");
            $summe += 0.99;
        }
        if ($aus == "scharf"){
            echo("Scharf 0,99€ <br> ");
            $summe += 0.99;

        }
        if ($aus == "kaese"){
            echo("Käse 1,99€ <br>");
            $summe += 1.99;

        } 
    }
    echo("<br>");
}
foreach($_POST["pizza2"] as $p){
    echo("Pizza Creamy Chicken 7,99€ <br> ");
    $summe += 7.99;
    foreach($p as $aus){
        if ($aus == "knoblauch"){
            echo("Knoblauch 0,99€ <br>");
            $summe += 0.99;
        }
        if ($aus == "scharf"){
            echo("Scharf 0,99€ <br> ");
            $summe += 0.99;

        }
        if ($aus == "kaese"){
            echo("Käse 1,99€ <br>");
            $summe += 1.99;

        } 
    }
    echo("<br>");
}
foreach($_POST["pizza3"] as $p){
    echo("Pizza Smokey Chicken 6,99€ <br> ");
    $summe += 6.99;
    foreach($p as $aus){
        if ($aus == "knoblauch"){
            echo("Knoblauch 0,99€ <br>");
            $summe += 0.99;
        }
        if ($aus == "scharf"){
            echo("Scharf 0,99€ <br> ");
            $summe += 0.99;

        }
        if ($aus == "kaese"){
            echo("Käse 1,99€ <br>");
            $summe += 1.99;

        } 
    }
    echo("<br>");
}

echo(" <h2>Summe: $summe € </h2>");
?>

        </div>
           
        

        
        

        

        <br><br>
        <input class ="button" type="Submit" value="Bestellen!">
        </form>  
        </div>
       
        <div class='grid-bottom'><img src='bilder/bottombanner.jpg' id='bottombanner'></div>
        
    
    
    </div>


</div>
      