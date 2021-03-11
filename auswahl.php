<!DOCTYPE html>

<html>
<head>
    <title>Pizza Place</title>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
    
   <div id="wrapper">
    <div class="grid-container">
    
    
   
        <div class='grid-top'><img src='bilder/topbanner.jpg'></div>
        <div class='grid-login'>Login Logout</div>
        <div class='grid-content'>
          
           
            
        <h1 style='text-align: center; '>Darf es etwas extra sein?:</h1>
        <form action="rechnung.php" method="post">

        <?php 
                

                $anzahlP1 = (int)($_POST["p1"]);
                $anzahlP2 = (int)($_POST["p2"]);
                $anzahlP3 = (int)($_POST["p3"]);


                echo "<table>
            			<col width = 30%>";
                
                for($i = 0; $i < $anzahlP1; $i++){
                    echo ("<tr><td><img class='pizzabild' src='bilder/pizza1.webp'></td>
                            <td>
                            <h3>Pizza Supreme Chicken</h3> 

                            <input type='checkbox' id='c1' name='pizza1[$i][]' value= 'knoblauch'>
			                <label for='c1'> Knoblauch 0,99€</label><br>
			                <input type='checkbox' id='c2' name='pizza1[$i][]' value= 'scharf'>
			                <label for='c2'> Scharf 0,99€</label><br>
                            <input type='checkbox' id='c2' name='pizza1[$i][]' value= 'kaese'>
			                <label for='c2'> Käse 1,99€</label><br>


                            </td> 
               
                            <td></td>
                            </tr>
                    ");
                }
                for($i = 0; $i < $anzahlP2; $i++){
                    echo ("<tr><td><img class='pizzabild' src='bilder/pizza2.webp'></td>
                            <td>
                            <h3>Pizza Creamy Chicken</h3> 

                            <input type='checkbox' id='c1' name='pizza2[$i][]' value='knoblauch'>
			                <label for='c1'> Knoblauch 0,99€</label><br>
			                <input type='checkbox' id='c2' name='pizza2[$i][]' value='scharf'>
			                <label for='c2'> Scharf 0,99€</label><br>
                            <input type='checkbox' id='c2' name='pizza2[$i][]' value='kaese'>
			                <label for='c2'> Käse 1,99€</label><br>
			                


                            </td> 


               
                            <td></td>
                            </tr>
                    ");
                }
                
                
                for($i = 0; $i < $anzahlP3; $i++){
                    echo ("<tr><td><img class='pizzabild' src='bilder/pizza3.webp'></td>
                            <td>
                            <h3>Pizza Smokey Chicken</h3>
                            <input type='checkbox' id='c1' name='pizza3[$i][]' value='knoblauch'>
			                <label for='c1'> Knoblauch 0,99€</label><br>
			                <input type='checkbox' id='c2' name='pizza3[$i][]' value='scharf'>
			                <label for='c2'> Scharf 0,99€</label><br>
                            <input type='checkbox' id='c2' name='pizza3[$i][]' value='kaese'>
			                <label for='c2'> Käse 1,99€</label><br>
                            </td> 
               
                            <td></td>
                            </tr>
                    ");
                }

                echo"</table>";


                

           ?>    
        <br><br>
        <input class ="button" type="Submit">
           
        </form>  

        
        

        </div>

       
        <div class='grid-bottom'><img src='bilder/bottombanner.jpg' id='bottombanner'></div>
        
    
    
    </div>


</div>
      

     

        


    

    
    
    
    
</body>


</html>