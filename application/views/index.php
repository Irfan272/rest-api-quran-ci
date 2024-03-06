<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Surat</th>
            </tr>
        </thead>
        <tbody>
           <?php
            $no = 1;
            foreach($api as $row) :
           ?>
                <tr>
                    <th><?= $no++?></th>
                    <th><?= $row['arti'] ?></th>
                </tr>
           <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>