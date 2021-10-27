<?php
function connectDb(){
    $conn = mysqli_connect("localhost","root","","remotlab");
    return $conn;
}
function fetchData($data){
    
    return $data;
}
function tampilFoto($id){
    $conn = mysqli_connect("localhost","root","","remotlab"); 
    $sql = "SELECT * from profileimg WHERE user_id = ".$id;
    $db = mysqli_query($conn,$sql) or die("Query error : " . mysqli_error($conn));
    $result = mysqli_fetch_array($db);
    return 'data:image/jpeg;base64,'.base64_encode( $result['img'] ).'';
}
?>