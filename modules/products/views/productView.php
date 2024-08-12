<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #343a40;
            color: #fff;
        }

        td {
            background-color: #f9f9f9;
        }

        .options {
            display: flex;
            gap: 10px;
        }

        form button {
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button.add {
            background-color: #28a745;
            color: #fff;
        }

        button.delete {
            background-color: #dc3545;
            color: #fff;
        }

        button.update {
            background-color: #007bff;
            color: #fff;
        }

        button.logout {
            background-color: #6c757d;
            color: #fff;
        }
    </style>
    <title>Your Page Title</title>
</head>

<body>
    <div class="container">

        <table id="table1">
            <thead>
                <?php foreach ($data[0] as $key => $value) : ?>
                    <th><?= $key ?></th>
                <?php endforeach; ?>
                <th>Options</th>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <?php foreach ($value as $key1 => $value1) : ?>
                            <td><?= $value1 ?></td>
                        <?php endforeach; ?>

                        <td class="options">
                            <form action="?mod=products&action=update" method="post">
                                <button class="update" type="submit" name="id" value="<?= $value['product_id'] ?>">Update</button>
                            </form>

                            <form action="?mod=products&action=delete_by_idProduct" method="post">
                                <button class="delete" type="submit" name="id" value="<?= $value['product_id'] ?>">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <form action="?mod=products&action=add" method="post">
            <button class="add" type="submit" name="id">Add</button>
        </form>

        <br>

        <form action="?mod=products&action=delete_allProduct" method="post">
            <button class="delete" type="submit" name="id">Delete All</button>
        </form>

        <br>

        <form action="?mod=users" method="post">
            <button class="logout" type="submit" name="id">Logout</button>
        </form>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- DATA TABLES SCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table1').DataTable({
                "iDisplayLength": 10,
                "aLengthMenu": [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"]
                ]
            });
        });
    </script>
</body>

</html>