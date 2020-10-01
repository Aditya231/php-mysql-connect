<!DOCTYPE html>
<html>
    <head>
        <title>testdb table</title>
        <link href="/css/normalize.css" rel="stylesheet">
        <link href="/css/index.css" rel="stylesheet">
    </head>
    <body>
        <h1 style="text-align: center; align-items: center;><b><u>Welcome to The Basic Php Db Tuts Page !</h1></u></b>
     <!--Giving A heading improves the simple basic structure of any website !-->

        <table>

        <?php foreach ($result as $row): ?>
            <tr>
            <?php foreach ($row as $value): ?>
                <td><?= $value ?></td>
            <?php endforeach ?>
            </tr>
        <?php endforeach ?>

        </table>

    </body>
</html>
