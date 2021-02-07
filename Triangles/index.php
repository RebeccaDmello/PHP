<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Triangles</title>
        <link href="styles.css" rel="stylesheet">
    </head>
    <body>
        <h1>Triangles</h1>
        <?php
            echo '<h3 id="first">First Triangle</h3>';
            for($i = 1; $i <= 10; $i++){
                for($j=1; $j <= $i; $j++){
                    echo '*';
                }
                echo '<br>';
            }
            echo '<hr/>';
            echo '<h3 id="second">Second Triangle</h3>';
            for($i = 10; $i >= 1; $i--){
                for($j=1; $j <= $i; $j++){
                    echo '*';
                }
                echo '<br>';
            }
            echo '<hr/>';
            echo '<h3 id="third">Third Triangle</h3>';
            for($i = 10; $i >= 0; $i--){
                for($j=1; $j <= 10-$i; $j++){
                    echo ' &nbsp; ';
                }
                for($k = 0;  $k <= $i; $k++){
                    echo '*';
                }
                echo '<br>';
            }
            echo '<hr/>';
            echo '<h3 id="fourth">Fourth Triangle</h3>';
            for($i = 0; $i <= 10; $i++){
                for($j=1; $j <= 10-$i; $j++){
                    echo ' &nbsp; ';
                }
                for($k = 0;  $k <= $i; $k++){
                    echo '*';
                }
                echo '<br>';
            }
            echo '<hr/>';
        ?>
    </body>
</html>

