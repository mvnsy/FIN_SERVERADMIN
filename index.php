<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aisyah Amalia</title>
</head>

<style>
    table {
        border-collapse: collapse;
        width: 30%;
        color: #c9a5f5;
        font-size: 15px;
        text-align: left;
    }

    th {
        background-color: #c9a5f5;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    .center {
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body style="font-size: 20px; position: absolute; top: 30%; transform: translateY(-50%); text-align: center; width: 100%;">
    <p>Aisyah Amalia - 2301904370</p> <br>

    <table class="center">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
        </tr>

        <?php
        $conn = mysqli_connect("trucorp-db-2.0", "root", "serveradmin", "trucorp-db");

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Nama"] . "</td><td>" . $row["Alamat"] . "</td><td>" . $row["Jabatan"] . "</td></tr>";
            };
            echo "</table>";
        }

        mysqli_close($conn);
        ?>
    </table>

    <br>
    <small>made for server administration final exam.</small>
</body>

</html>