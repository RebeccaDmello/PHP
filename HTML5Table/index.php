<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTML5Table</title>
        <style>
            table, th , td{
               border: 1px solid black;
               text-align: center;
               font-weight: bold;
               line-height: 3.5rem;
               font-size: 14pt;
            } 
            table {
                width: 80%;
            }
        </style>    
    </head>
    <body>
        <?php
        // put your code here
        echo '<h1>Sqaures and Cubes</h1>'
        . '<table>'
                . '<thead>'
                    . '<tr>'
                        . ' <th>number</th>'
//                        . ' <th>square</th>'
//                        . ' <th>cube</th>'
                    . '</tr>'
                . '</thead>'
                .'<tbody>';
                    for($i=0 ; $i<= 5; $i++){
                        echo '<tr>'
                        . '<td>'.$i.'</td>'
                        . '<td>'.$i * $i.'</td>'
                        . '<td>'.$i * $i * $i.'</td>'
                                . '</tr>';
                    }
                    echo '</tbody>'
                    . '</table>';
        ?>
    </body>
</html>
