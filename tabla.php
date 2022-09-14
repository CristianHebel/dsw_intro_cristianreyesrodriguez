<html>
    <body>
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