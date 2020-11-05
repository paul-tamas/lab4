<?php 
$action = $_POST['action'];

require_once("dbconnection.php");
if(isset($_POST['submit'])){
 if(empty($action)){
echo "Please fill all fields " ;
 }
 else {
    $query = "insert into todo (nume) values('$action')";
    $result = mysqli_query($con,$query);
    if($result){
        header("location:index.php");

    }
    else{
        echo" can not insert into database";
    }
 }
}
else{
    header("location:index.php");
}

if(isset($_POST['update'])){
    $id=$_GET['id'];
  echo "<script> alert('".$id."')</script>";
    $name=$_POST['input_field'];
    echo $name;
    $query="update todo set nume='".$name."'where id='".$id."'";
    $result=mysqli_query($con,$query);
    if($result){
        header("location:index.php");
    }else{
        echo "can not update in database";
    }
}
else{
    header("location:index.php");
}
if(isset($_GET['DelID'])){
$id=$_GET['DelID'];

$query="delete from todo where id='".$id."'";
$result=mysqli_query($con,$query);
if($result){
    header("location:index.php");
}else{
    echo" can not delete this task";
}

}
?>
