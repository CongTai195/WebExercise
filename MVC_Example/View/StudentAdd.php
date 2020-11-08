<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Thêm</title>
</head>

<body>
    <form id="form" action="http://localhost/CNWeb18N13/MVC_Example/Controller/C_Student.php" method="POST" name="FormAdd" class="FormAdd">
        <h1>Insert</h1>
        <table>
            <tr>
                <th>ID</th>
                <td><input type="text" name="ID" id="ID"></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="text" name="age" id="age"></td>
            </tr>
            <tr>
                <th>University</th>
                <td><input type="text" name="university" id="university"></td>
            </tr>
        </table>
        <input class="submit" type="submit" value="Add" name="add">
        <input class="submit" type="button" value="Cancel" name="cancel" onclick="Cancel()">
    </form>
    <script>
        function Cancel() {
            window.history.back();
        }
    </script>
</body>

</html>