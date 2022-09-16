<html>
    <body>
        <title> Esto es una modificación </title>
        
        <h1> probando conflicto </h1>
        <h1> Cristian Hebel Reyes Rodríguez </h1>
    <table style="border: 3px solid black";>
        <tr>
            <td style="border: 1px solid black";>
                <?php
            $time = time();
            echo date("d-m-Y", $time); 
             ?>
            </td>
            <td style="border: 1px solid black";>
                <?php
                $time = time();
                echo date("H:i:s", $time); 
                ?>
            </td>
        </tr>
    </table>
    </body>
</html>