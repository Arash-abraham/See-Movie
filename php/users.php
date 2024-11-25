<?php
    require 'lib.php';
    session();
    connection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Select Users</title>
    <style>
        .table {
            margin-top: 20px;
        }
        .table th, .table td {
            padding: 15px;
        }
    </style>
</head>
<body>
    <?php
        $q = "SELECT * FROM `users`;";
        $result = mysqli_query($dbLink, $q);
    ?>
    <div class="container">
        <div class="row pt-5">
            <table class="table table-bordered">
                <tr class="text-center">
                    <td>
                        Username
                    </td>
                    <td>
                        Setting
                    </td>
                </tr>
                <?php     
                while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr class="text-center">
                    <td><strong><?php print $row["username"] ?></strong></td>
                    <td>
                        <form action="all.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="Details" class="btn btn-primary details-row" name="Send">
                            <input type="submit" value="Setting" class="btn btn-secondary setting-row" name="Send">
                            <input type="submit" value="Delete" class="btn btn-danger delete-row" name="Send">
                        </form>
                    </td>
                </tr>
                <?php
                }
            ?>
            </table>
        </div>
    </div>
</body>
</html>
<?php
    disconnect();
?>
