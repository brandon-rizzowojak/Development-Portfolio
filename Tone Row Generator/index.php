<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $row = array("A", "A#", "Ab", "B", "B#", "Bb", "C", "C#", "Cb", "D", "D#", "D", "E", "E#", "F", "F#", "G", "G#", "Gb",);
        $numbers = range(1, 12);
        shuffle($numbers);
        echo implode(', ', $numbers);
        ?>
    </body>
</html>
