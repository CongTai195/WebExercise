<!DOCTYPE html>
<html>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity: 1;
    }

    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    .cancelbtn,
    .signupbtn {
        float: left;
        width: 50%;
    }

    .container {
        padding: 16px;
        width: 50%;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

        .cancelbtn,
        .signupbtn {
            width: 50%;
        }
</style>

<body>

    <form action="" method="POST">
        <div class="container">
            <h1>Detail</h1>
            <hr>
            <label for="ID"><b>ID</b></label>
            <input type="text" readonly placeholder="Enter ID" value="<?php echo $student->id ?>" name="ID" required>

            <label for="name"><b>Name</b></label>
            <input type="text" readonly placeholder="Enter Name" value="<?php echo $student->name ?>" name="name" required>

            <label for="age"><b>Age</b></label>
            <input type="text" readonly placeholder="Enter Age" value="<?php echo $student->age ?>" name="age" required>

            <label for="University"><b>University</b></label>
            <input type="text" readonly placeholder="Enter University" value="<?php echo $student->university ?>" name="university" required>

            <div class="clearfix">
                <button type="button" class="cancelbtn" onclick="Cancel()">Back</button>
            </div>
        </div>
    </form>
    <script>
        function Cancel(){
            window.history.back();
        }
    </script>
</body>
</html>