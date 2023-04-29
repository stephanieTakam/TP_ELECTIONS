<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Region</title>
</head>
<style>
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
</style>

<body>

    <div>
        @if (session()->get('success'))
            <div>
                {{ session()->get('success') }}
            </div>
        @endif

        <h1>Update de la region</h1>

    <div>
        <form method="get" action="region_form_update">
            @csrf

            <label for="nom">Name</label>
            {{-- @method('PUT') --}}

            <input type="text" id="fname" name="nom" value={{$reg["label"]}} required>
            <input type="hidden" name="id" value="{{ $reg -> id }}">
            <input type="submit" value="Submit">
        </form>
    </div>
    </div>
</body>

</html>
