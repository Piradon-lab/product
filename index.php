<html>

<head>
    <title>ITF Lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'server-pp.mysql.database.azure.com', 'Piradon@server-pp', 'HJWgbw86', 'product', 3306);
    if (mysqli_connect_errno($conn)) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
    $res = mysqli_query($conn, 'SELECT * FROM sinka');
    ?>
    <table class="table table-primary table table-boarded">
        <tr>
            <p class="text-white">
                <th width="15%">
                    <div align="center">
                        <h4>
                            <p class="text-white">id </p>
                        </h4>
                    </div>
                </th>
                <th width="15%">
                    <div align="center">
                        <h4>
                            <p class="text-white">Product </p>
                        </h4>
                    </div>
                </th>
                <th width="15%">
                    <div align="center">
                        <h4>
                            <p class="text-white">Price </p>
                        </h4>
                    </div>
                </th>
                <th width="15%">
                    <div align="center">
                        <h4>
                            <p class="text-white">Amount </p>
                        </h4>
                    </div>
                </th>
                <th width="15%">
                    <div align="center">
                        <h4>
                            <p class="text-white">Total </p>
                        </h4>
                    </div>
                </th>
                <th width="15%">
                    <div align="center">
                        <h4>
                            <p class="text-white">Manage </p>
                        </h4>
                    </div>
                </th>
        </tr>
        <?php
        while ($Result = mysqli_fetch_array($res)) {
        ?>
            <tr>
                <td><?php echo $Result['id']; ?></div>
                </td>
                <td><?php echo $Result['Product']; ?></td>
                <td><?php echo $Result['Price']; ?></td>
                <td><?php echo $Result['Amount']; ?></td>
                <td><?php echo $Result['Total']; ?></td>
                <td><?php echo $Result['Manage']; ?><a href = "remove.php?delete_id=<?php echo $Result['ID']; ?>"><button type="button" class="btn btn-primary">Delete</button></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>
    <?php
    mysqli_close($conn);
    ?>
    <center><a href="form.php"><button type="button" class="btn btn-secondary">Add</button></a></center>
</body>

</html>
