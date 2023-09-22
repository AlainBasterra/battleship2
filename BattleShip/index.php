<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BattleShip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>
    <center>
        <h1>BattleShip</h1>
    </center>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="m-auto">
                <table class="m-auto table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center" style="width:80px;">#</th>
                            <th scope="col" class="text-center" style="width:80px;">A</th>
                            <th scope="col" class="text-center" style="width:80px;">B</th>
                            <th scope="col" class="text-center" style="width:80px;">C</th>
                            <th scope="col" class="text-center" style="width:80px;">D</th>
                            <th scope="col" class="text-center" style="width:80px;">E</th>
                            <th scope="col" class="text-center" style="width:80px;">F</th>
                            <th scope="col" class="text-center" style="width:80px;">G</th>
                            <th scope="col" class="text-center" style="width:80px;">H</th>
                            <th scope="col" class="text-center" style="width:80px;">I</th>
                            <th scope="col" class="text-center" style="width:80px;">J</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < 10; $i++) {
                            echo "
                        <tr style='height:80px;' class='text-center'>
                            <th scope='row'>" . $i + 1 . "</th>";
                            for ($j = 1; $j <= 10; $j++) {
                                echo "<td><div id='" . (($i*10) + $j) . "'>" . (($i*10) + $j) . "</div></td>";
                            }
                            echo "
                        </tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-3"></div>
    </div>

</body>

</html>