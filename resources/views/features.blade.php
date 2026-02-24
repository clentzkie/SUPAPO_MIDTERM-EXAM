<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Midterm - Laravel Features</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { width: 60%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { color: blue; text-decoration: underline; font-size: 0.9em; }
    </style>
</head>
<body>

    <a href="/features">Features</a>

    <h1>Laravel Features</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Feature Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($features as $feature)
                <tr>
                    <td>{{ $feature->id }}</td>
                    <td>{{ $feature->name }}</td>
                    <td>{{ $feature->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>