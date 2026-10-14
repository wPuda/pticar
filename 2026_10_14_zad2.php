<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$r = 4;
$s = 5;
    ?>
    <table border="1">
        <?php 
        $k=0;
        for($i=0;$i<$r;$i++){
            
        
        ?>
        <tr>
            <?php 
            for($j =0;$j<$s;$j++){
                //$tdData=$k;
                $tdData=$j+$i*$s;
                $k++
            ?>

            <td><?php echo $tdData?>         </td>
            <?php } ?>
        </tr>
        <?php } ?>
         
            
            
        
    </table>
</body>
</html>