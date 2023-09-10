<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        tr, td {
            border: 1px solid black; 
            padding: 8px; 
            text-align: center; 
        }
    </style>
</head>
<body>
        <?php 
            if (isset($_POST["ten"]))
            {
            $ten="Chào bạn ".$_POST["ten"];
           
            }
        ?>
    <table>
        <form action="ex_1_2.php" method="$_POST">
            <tr> 
                <td colspan="2">In lời chào</td>
            
            </tr>
            <tr> 
                <td>Gửi lời chào</td>
                <td><input type="text" name="ten" id="chao3" /></td>
            </tr>
            <tr> 
                <td colspan="2">
                    <label><?php echo $ten; ?></label></td>
                </td>
            </tr>
            <tr> 
            <td colspan="2"><input type="submit" value="Xuất"></td>
            </tr>
        </form>
    </table>
</body>
</html>