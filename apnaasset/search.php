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



        <h2><center>Search by location, Department, nature(perishable or not), vendorname of Asset </center></h2>





         <form action="rsbyl.php" method="post" name="Enter">

                        <center>
                        <label for="location">Location:- </label>
                        <input id="input_block" type="text" name="location">

                       
                         <input id="btn_block" type="submit" value="Enter" name="Enter" style="margin-left:10px;font-weight:bold;"/>
                        </center>





        </form>


        <form action="rsbyd.php" method="post" name="Enter">

                        <center>
                        
                         <label for="department">Department</label>
                        <input id="input_block" type="text" name="department">

                        
                         <input id="btn_block" type="submit" value="Enter" name="Enter" style="margin-left:10px;font-weight:bold;"/>
                        </center>





        </form>


        <form action="rsbyv.php" method="post" name="Enter">

                        <center>
                        

                         <label for="vendorname">Vendorname</label>
                        <input id="input_block" type="text" name="vendorname">

                        
                         <input id="btn_block" type="submit" value="Enter" name="Enter" style="margin-left:10px;font-weight:bold;"/>
                        </center>





        </form>


        <form action="rsbyp.php" method="post" name="Enter">

                        <center>
                        


                        <label for="perishable">Isperishable</label>
                        <input id="input_block" placeholder="type yes or no" type="text" name="perishable">

                       
                         <input id="btn_block" type="submit" value="Enter" name="Enter" style="margin-left:10px;font-weight:bold;"/>
                        </center>





        </form>





        

        


</body>
</html>
