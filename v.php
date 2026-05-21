<?php
$conn=mysqli_connect("localhost","root","","ultra");
$row=json_decode(file_get_contents("php://input"),true);
if($row){
    $data=$row['distance'];
    $name=$row['device_name'];
    $insert=mysqli_query($conn,"insert into sensor(Sensor,data) values ('$name','$data')");
    if($insert){
        echo "inserted";
    }else{
        echo "failed to insert";
    }
}else{
    echo "invalid";
}
?> 