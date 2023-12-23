<?php
    session_start();
    if($_SESSION['roleid']!=1)
    {
        header("Location: ./login.php");
    }
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
       
 <br><br>
    <form action="admindb.php" method="post" enctype="multipart/form-data">
        <table border="1" align="center">
        <th><h3 align="center">New data</h3> </th>
        <tr>
            <td>
                <input type="text" name="txtname" placeholder="Enter Name" required><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="txtprice" placeholder="Enter Price" required><br>
            </td>
        </tr>
        <tr>
            <td> 
                <input type="file" name="myfile" accept=".jpeg ,.jpg">
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="submit" name="submit" value="Add Details"><br>
            </td>
        </tr>
        </table>
    </form>
    
</body>
</html>