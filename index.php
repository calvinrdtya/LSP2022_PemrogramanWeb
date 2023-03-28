<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Add Nilai</title>

            <style>
                table {
                    margin-left: 25%;
                    margin-top: 2%;
                }
                .btn {
                    margin-left: 25%;
                    margin-top: 30px;
                }
                .hed {
                    margin-left: 25%;
                    margin-top: 10%;
                }
            </style>
        </head>
    <body>

        <div class="container">
            <div class="hed">
                <form action="index.php" method="get">Masukkan Banyaknya Mata Pelajaran
                    <input type="number" name="total_mapel" value="<?= $_GET['total_mapel']; ?>">
                    <button class="1" type="submit">Submit</button>
                </form>
            </div>
        <form action="detail.php" method="get">
            <table border="1">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>MATA PELAJARAN</th>
                        <th>JAM</th>
                        <th>NILAI</th>
                    </tr>
                </thead>
            <tbody>

                <?php

                    for ($i = 1; $i <= $_GET['total_mapel']; $i++) {
                        echo '
                            <tr>
                                <td>' . $i . '</td>
                                <td>
                                    <input type="text" name="mapel[]" placeholder="Mapel" required>
                                </td>
                                <td>
                                    <input type="number" name="jam[]" placeholder="Jam" required>
                                </td>
                                <td>
                                    <input type="number" name="nilai[]" placeholder="Nilai" required>
                                </td>
                            </tr>
                        ';
                    }
                ?>
                </tbody>
            </table>
            
                <button class="btn" type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>