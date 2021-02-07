<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>File Operations with Table</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

        tr{
            border-bottom: 1px solid black;
            line-height: 3.5rem;
            font-family: serif;
            font-size: 20px;
            }
        </style>    
    </head>
    <body>
        <?php
        // put your code here
        $filename = "example.stl";
        
        $handle = fopen($filename,'r');
        
        $myFile = new SplFileObject("example.stl");
        echo '<table>';
        while (!$myFile->eof()) {
            
            $str = $myFile->fgets();
            $str = str_replace('facet','',$str);
           
            if(strpos($str,'normal')== true || strpos($str,'vertex')== true){
                $word_arr = explode(" ", $str);
                echo '<tr>';
                foreach($word_arr as $word){
                    if(!empty($word)){
                        echo '<td>'
                       .$word
                            .'</td>';
                        }
                    }
                echo '</tr>';
            }
            echo '<br>';
        }
         echo '</table>';
        fclose($handle);
        ?>
       
    </body>
</html>
