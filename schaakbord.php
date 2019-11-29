<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schaakbord</title>
    <style>
        td {
            width: 50px;
            height: 50px;
        }

        .black {
            background-color: black;
        }
    </style>
</head>
<body>
    <table>
        <tbody>
            <?php
                $rows = 8;
                $collums = 8;

                for ($i=0; $i < $rows ; $i++) { 
                    if($i%2 === 1){
                        echo('<tr>');
                            for ($j=0; $j < $collums; $j++) { 
                                if($j%2 === 0){
                                    echo('<td class="black"></td>');
                                } else {
                                    echo('<td></td>');
                                }
                            }
                        echo('</tr>');
                    } else {
                        echo('<tr>');
                            for ($j=0; $j < $collums; $j++) { 
                                if($j%2 === 1){
                                    echo('<td class="black"></td>');
                                } else {
                                    echo('<td></td>');
                                }
                            }
                        echo('</tr>');
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>
