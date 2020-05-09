<?php require 'core/init.php';

if(logged_in() === false){

    session_destroy();
    header('Location:index.php');
    exit();

} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Asset Management System</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css">
    <link rel='stylesheet' href='css/input_form.css'>
    <script src="js/activation.js"></script>
    
</head>
<body>
<div id="page">
        <header>
            <a title="asset" href="">
                <div class="logo">
                    <img src="images/logo.png" height="66px" weight="66px" />
                    <span id="title">Asset Management System</span>
                </div>
            </a>

            <nav>


                <label for="email"><?php echo $user_data['first_name']; ?> </label>
                <a href="home.php"><input type="image" src="images/icons/home.png" title="Home" value="home " style="margin-left:10px;"/></a>
                <a href="profile.php"><input type="image" src="images/icons/user.png" name="setting" value="settings " style="margin-left:10px;font-weight:bold;"/></a>
                <a href="logout.php"><input type="image" src="images/icons/logout.png" name="logout" value="Sign Out" style="margin-left:10px;font-weight:bold;"/></a>

            </nav>
        </header>
    <br><br>






        <?php


            

                $location    = $_POST['location'];
                echo $location;


                $department    = $_POST['department'];
                echo $department;

                $perishable    = $_POST['perishable'];
                echo $perishable;

                $vendorname    = $_POST['vendorname'];
                echo $vendorname;

                $result = getAssets($con, $user_data["id"]);
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


</body>
</html>
