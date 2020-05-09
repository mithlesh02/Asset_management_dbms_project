<?php

function addAsset($con, $asset_data) {
    $fields='`' .implode('`,`' ,array_keys($asset_data)) . '`';
    $data = '\'' . implode('\', \'' ,$asset_data ) . '\' ';

    mysqli_query($con,"INSERT INTO uassets($fields) VALUES ($data)");
}



function asset_data($con,$id){
        $data =array();
        $id= (int)$id;
        $res=mysqli_query($con,"SELECT * FROM `uassets` WHERE `id`= $id");
            $data = mysqli_fetch_assoc($res);
            return $data;

}


function total($con,$id){
    $sql= "SELECT * FROM `uassets` WHERE `userid`=$id";
    $res = mysqli_query($con,$sql);
    $tot= mysqli_num_rows($res);
    return $tot;
}

function getAssets($con, $userid) {
    $sql = "SELECT * FROM uassets WHERE userid=$userid";
    $res = mysqli_query($con,$sql);
    return $con->query($sql);
}

function giveAssetsbylocation($con, $location,$userid) {

    $location = '"' . $location . '"';

    $sql = "SELECT * FROM uassets WHERE userid=$userid and location=$location";
    $res = mysqli_query($con,$sql);
    return $con->query($sql);
}

function giveAssetsbyvendorname($con, $vendorname,$userid) {

    

    $vendorname = '"' . $vendorname . '"';

    $sql = "SELECT * FROM uassets WHERE userid=$userid and vendorname=$vendorname";
    $res = mysqli_query($con,$sql);
    return $con->query($sql);
}

function giveAssetsbyperishable($con, $perishable,$userid) {

    $perishable = '"' . $perishable . '"';

    $sql = "SELECT * FROM uassets WHERE userid=$userid and perishable=$perishable";
    $res = mysqli_query($con,$sql);
    return $con->query($sql);
}

function giveAssetsbydepartment($con, $department,$userid) {

    $department = '"' . $department . '"';

    $sql = "SELECT * FROM uassets WHERE userid=$userid and department=$department";
    $res = mysqli_query($con,$sql);
    return $con->query($sql);
}

function output_errors($errors) {
    return '<ul style="list-style:none;"><li>'. implode('</li><li>',$errors) . '</li></ul>';
}


function update_assets($con,$update_data,$id){
    $update = array();
    foreach($update_data as $field=>$data){
        $update[]= '`'. $field. '`=\''.$data.'\'';
    }

    mysqli_query($con,"UPDATE `uassets` SET" . implode(', ',$update) .  " WHERE `id`=$id");


}


function delete_data($con,$id){

    $query = "DELETE FROM `uassets` WHERE `id`= $id";
    mysqli_query($con,$query);
}


function getCount($con,$category,$id){
    $sql = "SELECT * FROM `uassets` WHERE userid='$id'";
    $res = mysqli_query($con,$sql);

    if(mysqli_num_rows($res)>1) {
        $count=0;
        while ($row = mysqli_fetch_assoc($res)) {
            $count = $count+$row['quantity'];

        }

        return $count;

    } else if(mysqli_num_rows($res)==1){
        $row= mysqli_fetch_assoc($res);
       return $row['quantity'];

    }else {
        return 0;
    }
}

function getPrice($con,$category,$id){

    $sql = "SELECT * FROM `uassets` WHERE  userid='$id'";
    $res = mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>1) {
        $price=0;
        while ($row = mysqli_fetch_assoc($res)) {
            $price = $price + ($row['price']*$row['quantity']);
        }

        return $price;

    } else if(mysqli_num_rows($res)==1){
        $row= mysqli_fetch_assoc($res);
        return $row['quantity']*$row['price'];

    } else {
        return 0;
    }
}


?>