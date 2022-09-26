<?php
    include('connect.php');

    $khoas = query("select * from khoa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach khoa</title>
</head>
<body>
    <a href="./create.php">them</a>
    <table border="1">
        <tbody>
            <?php
                foreach($khoas as $row){ 
            ?>
               <tr>
                   <td>
                       <?php
                        echo "#" . $row['maKhoa'];
                       ?>
                   </td>
                   <td>
                       <?php
                        echo $row['tenKhoa'];
                       ?>
                   </td>
               </tr> 
            <?php    
                }
            ?>
        </tbody>
        <thead>
            <tr>
                <th>ma khoa</th>
                <th>ten khoa</th>
            </tr>
        </thead>
    </table>
</body>
</html>