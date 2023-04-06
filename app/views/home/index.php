<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3><?= $data['title']; ?></h3>
    <a href="<?= URLROOT; ?>/vulkaan/index">Instructeurs in dienst</a>

    <table border="1">
        <thead>
            <th>Id</th>
            <th>Naam Vulkaan</th>
            <th>Hoogte (m)</th>
            <th>Land</th>
            <th>Laatste Uitbarsting</th>
            <th>Aantal Slachtoffers</th>
        </thead>
        <tbody>
            <tr>
                <td><?= $data['id']; ?></td>
                <td><?= $data['name']; ?></td>
                <td><?= $data['hoogte']; ?></td>
                <td><?= $data['land']; ?></td>
                <td><?= $data['jaarlaatsteuitbarsting']; ?></td>
                <td><?= $data['aantalslachtoffers']; ?></td>
            </tr>
        </tbody>
    </table>

</body>

</html>