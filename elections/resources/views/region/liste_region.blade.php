<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
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
        <h3>Liste des regions</h3>

        @if ($region->count() > 0)
        <table>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Created At</th>
              <th>Actions</th>
            </tr>

            @foreach ($region as $r)
            <tr>
                <td>{{ $r->id }}</td>
                <td>{{ $r->label }}</td>
                <td>{{ $r->created_at }}</td>
                <td><span>
                    <a href="/region_update/{{$r->id}}"><button class="button button1">Modifier</button></a>
                    <a href="/region_delete/{{$r->id}}"><button class="button button2">Supprimer</button></a>
                    </span></td>
              </tr>
            @endforeach
          </table>
        @else

        @endif

    <div>

    </div>

    </body>
</html>
