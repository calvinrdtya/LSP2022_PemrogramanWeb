<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Detail Nilai</title>

        <style>
            table {
                margin-left: 35%;
                margin-top: 15%;
            }

            h4 {
                margin-left: 35%;
            }
        </style>
    </head>
<body>
            <div class="container">
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
                        $data = $_GET;

                        for ($i = 0; $i < count($data['mapel']); $i++) {

                            if ($data['nilai'][$i] >= 90 && $data['nilai'][$i] <= 100) {
                                $nilai = 'A';
                            }
                            if ($data['nilai'][$i] >= 80 && $data['nilai'][$i] <= 89) {
                                $nilai = 'B';
                            }
                            if ($data['nilai'][$i] >= 79 && $data['nilai'][$i] <= 79) {
                                $nilai = 'C';
                            }
                            if ($data['nilai'][$i] >= 0 && $data['nilai'][$i] <= 78) {
                                $nilai = 'D';
                            }

                        echo '
                            <tr>
                                <td>' . $i + 1 . '</td>
                                <td>
                                    ' . $data['mapel'][$i] . '
                                </td>
                                <td>
                                    ' . $data['jam'][$i] . '
                                </td>
                                <td>
                                    ' . $nilai . '
                                </td>
                            </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>

            <?php

            $total = array_sum($data['nilai']);
            $rata = $total / count($data['nilai']);

            echo '
                    <h4>Total Nilai : ' . $total . '</h4>
                    <h4>Rata-rata Nilai : ' . $rata . '</h4>
                ';

            ?>

        </div>
    </body>
</html>