<html>
    <head>
        <title>User List</title>
    </head>
    <body style="background-color:powderblue;">
        <?php

            include 'config.php';

            $sql="SELECT name,email,phone,service,address,queries FROM userlist";
            $results=mysqli_query($con,$sql);
            echo "<table border='1'>
                    <tr>
                        <th> NAME </th>
                        <th> EMAIL </th>
                        <th> PHONE </th>
                        <th> SERVICE </th>
                        <th> ADDRESS </th>
                        <th> QUERY </th>
                    </tr>";
                    while($row = mysqli_fetch_array($results))
                    {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['service'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['queries'] . "</td>";
                    echo "</tr>";
                    }
            echo "</table>";
        ?>
    </body>
</html>
