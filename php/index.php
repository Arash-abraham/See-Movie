<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row pt-5">
            
        <?php
                    if(isset($_POST['btn_send']))
                    {
                        ?>
                            <table class="table table-bordered">
                                <tr class="text-center">
                                    <td>
                                        First Name
                                    </td>
                                    <td>
                                        Last Name
                                    </td>
                                </tr>
                                <?php   
                                    $lnArray = $_POST['ln'];//$lnArray = array();
                                    $i = 0;
                                    foreach($_POST['fn'] as $fn)
                                    {
                                        $ln = $lnArray[$i];
                                ?>
                                <tr class="text-center">
                                    <td><strong><?php print $fn; ?></strong></td>
                                    <td><strong><?php print $ln; ?></strong></td>
                                </tr>
                                <?php
                                        $i++;
                                    }
                                ?>
                            </table>

                        <?php
                    }
                    else
                    {
                ?>
            <form id='add-btn' method="post" action="">
                <table id="tbl-list" class="table table-bordered">
                    <tbody>
                        <tr class="text-center">
                            <td>
                                <label for="fn1" class="form-label fn-label">First Name <span class="span-fn">1</span>:</label>
                                <input type="text" class="form-control fn" id="fn1" name="fn[]">
                            </td>
                            <td>
                                <label for="ln1" class="form-label ln-label">Last Name <span class="span-ln">1</span>:</label>
                                <input type="text" class="form-control ln" id="ln1" name="ln[]">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <input type="submit" value="Send" class="btn btn-info send-row" name="btn_send">
                <input type="button" class="btn btn-success add-row" id="add-row" value="Add">
                <input type="button" class="btn btn-danger del-row" onclick="removeLastItem()" value="Delete Last">
            </form>
            <?php
                    }
                ?>
        </div>
    </div>

    <script>
        function removeLastItem() {
            var tbl = document.querySelector('#tbl-list tbody');
            var rows = tbl.getElementsByTagName('tr');
            
            if (rows.length === 1) {
                alert("Cannot delete the last row!");
            } else if (rows.length > 1) {
                rows[rows.length - 1].remove();
            }
        }

        function addItem() {
            var tbl = document.querySelector('#tbl-list tbody');
            var tr = document.querySelector('#tbl-list tr:last-child');
            var newTr = tr.cloneNode(true);
            var len = document.querySelectorAll('.fn-label').length;

            // Reset values and IDs for new row
            newTr.querySelector('.fn').value = '';
            newTr.querySelector('.ln').value = '';
            newTr.querySelector('.fn-label').setAttribute('for', 'fn' + (len + 1));
            newTr.querySelector('.ln-label').setAttribute('for', 'ln' + (len + 1));
            newTr.querySelector('.fn').setAttribute('id', 'fn' + (len + 1));
            newTr.querySelector('.ln').setAttribute('id', 'ln' + (len + 1));
            newTr.querySelector('.span-fn').innerText = len + 1;
            newTr.querySelector('.span-ln').innerText = len + 1;

            // Append the new row to the table
            tbl.appendChild(newTr);
        }

        document.getElementById('add-row').addEventListener('click', addItem);
    </script>
</body>
</html>
