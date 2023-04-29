<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Region</title>
</head>
<style>

    /* css ajout de region */
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 40px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    .button {
    background-color: #4CAF50; /* Green */
    border: none;
    border-radius: 15px;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    }
    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #0CD3F6;
    }

    /* css liste des regions */
    .button1:hover {
        background-color: #0CD3F6;
        color: white;
    }

    .button2 {
        background-color: white;
        color: black;
        border: 2px solid #F20909;
    }

    .button2:hover {
        background-color: #F71212;
        color: white;
    }
    table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
</style>

<body>

    <h1>Ajout de region</h1>

    <div>
        <form method="POST" action="region_insert">
            @csrf

            <label for="label">Name</label>
            <input type="text" id="fname" name="label" required>

            <input type="submit" value="Submit">
        </form>
    </div>
    <br>
    <hr>
    <br>
</body>

</html>
