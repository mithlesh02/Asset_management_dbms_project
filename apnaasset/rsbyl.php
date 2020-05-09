
<?php 
require 'core/init.php';

if(logged_in() === false){

    session_destroy();
    header('Location:index.php');
    exit();

} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Asset Management System</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css">
    <link rel="stylesheet" href="css/home.css" />

</head>
<body>

    <div id="page">
        <header>
            <a title="asset" href="home.php">
                <div class="logo">
                    <img src="images/logo.png" height="66px" weight="66px" />
            </a>

            <span id="title">Asset Management System</span>
    </div>
            <nav>
                    <label for="email">Welcome <?php echo $user_data['first_name']; ?> </label>

                <input type="image" src="images/icons/home.png" title="home" value="Home" style="margin-left:10px;"/>
                <a href="profile.php"><input type="image" src="images/icons/user.png" title="Profile" value="settings " style="margin-left:10px;"/></a>
                <a href="logout.php"><input type="image" src="images/icons/logout.png" title="Logout" value="Sign Out" style="margin-left:10px;"/></a>

            </nav>

        </header>

        <div class="content-center">
            <div id="topic">Items at location : <?php echo $_POST['location'];?></div>
            
            
            <table border=0>
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Location</th>
                <th>Isperishable</th>
                <th>Degrading rate</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Vendorname</th>
                <th>Purchasedate</th>
                
                
            </tr>
            <?php
                $id = $user_data['id'];
                $result =giveAssetsbylocation($con, $_POST['location'],$user_data["id"]);
                $i = 1;
                while($row = $result->fetch_assoc()) {
                    echo "<tr style='background-color:";
                    if ($i % 2 == 0) {
                        echo "#f2f2f2";
                    } else {
                        echo "white";
                    }
                    $i++;
                    echo "'>";
                    echo "<td style='text-align: center'>" . $row["name"] . "</td>";
                    echo "<td style='text-align: center'>" . $row["department"] . '</td>';
                    echo '<td style="text-align: center">' . $row['location'] . '</td>';
                    echo '<td style="text-align: center">' . $row['perishable'] . '</td>';
                    echo '<td style="text-align: center">' . $row['degradingrate'] . '</td>';
                    echo '<td style="text-align: center">' .'Rs '. $row['price'] . '</td>';
                    echo '<td style="text-align: center">'.'Rs '.$row['quantity'] * $row['price'] . '</td>';
                    echo '<td style="text-align: center">' . $row['description'] . '</td>';
                    echo '<td style="text-align: center">' . $row['vendorname'] . '</td>';
                    echo '<td style="text-align: center">' . $row['purchasedate'] . '</td>';
                    echo "<td style='text-align: center'><a href=\"delete.php?id=".$row['id']."\"><img src='images/icons/delete.ico' height='24'/></a></td>";
                    echo "<td style='text-align: center'><a href=\"update.php?id=".$row['id']."\"><img src='images/icons/edit.png' alt='' height='24'/></a></td>";
                    echo '</tr>';


                    
                    
            }

            ?>



            </table>
            <!-- <a href="report.php"><div id="report">Generate Report</div></a> -->
        </div>
        
    </div>
</body>
</html>
