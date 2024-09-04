<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 20px;
        }
        .table-container {
            width: 100%;
            max-width: 800px;
            margin: auto;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #17a2b8;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:nth-child(odd) {
            background-color: #fdfdfd;
        }
        .table-container img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }
        .btn-edit {
            background-color: #007bff;
        }
        .btn-delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td><img src="img/p1.jpg" alt="Tokyo Ghoul"></td>
                    <td>John Doe</td>
                    <td>+6212 3456 66</td>
                    <td>Jawa Timur</td>
                    <td>
                        <button class="btn btn-edit">Edit</button>
                        <button class="btn btn-delete">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td><img src="img/p2.jpg" alt="Mirainickchy"></td>
                    <td>Cantika Karin</td>
                    <td>+6234 7867 77</td>
                    <td>Jawa Tengah</td>
                    <td>
                        <button class="btn btn-edit">Edit</button>
                        <button class="btn btn-delete">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>03</td>
                    <td><img src="img/P3.jpg" alt="Kenja No Mago"></td>
                    <td>Karina Putri</td>
                    <td>+6261 8899 88</td>
                    <td>Jawa Barat</td>
                    <td>
                        <button class="btn btn-edit">Edit</button>
                        <button class="btn btn-delete">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>    
 <form method="POST" action="/logout">
    @csrf
    <button type="submit">Logout</button>
</form>
</body>
</html>
