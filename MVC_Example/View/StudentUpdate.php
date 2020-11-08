<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Handlee', cursive;
            padding: 10px;
            margin: 0;
            overflow: auto;
            border-radius: 10px;
        }

        table {
            width: 100%;
            font-size: 12pt;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
            table-layout: fixed;
        }

        th {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            table-layout: fixed;
        }

        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
            table-layout: fixed;
        }

        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        caption {
            font-size: 15pt;
            font-weight: bold;
        }

        a:link,
        a:visited {
            background-color: white;
            color: black;
            border: 2px solid green;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover,
        a:active {
            background-color: green;
            color: white;
        }

        .section {
            overflow: hidden;
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <h2>Danh sách sinh viên:</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Update</th>
        </tr>
        <?php
        for ($i = 0; $i < sizeof($studentList); $i++) {
        ?>
            <tr>
                <th><?php echo $studentList[$i]->id ?></th>
                <td><?php echo $studentList[$i]->name ?></td>
                <th><a href="?updateid=<?php echo ($studentList[$i]->id) ?>">Click me</a></th>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>