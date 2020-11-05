<?php
require_once("dbconnection.php");
$query=" select * from todo";
$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>

<head>
    <title>ToDo List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" a href="bootstrap.css">

</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h1 class="bg-success text-white text-center py-3">Add a new task </h1>
                    </div>
                    <div class="card-body">
                        <form action="server.php" method="POST">
                          
                                <input type="text" class="from-control" placeholder="Insert Task"
                                 name="action">
                            
                            
                            <button class="btn-primary" name="submit">Save</button>
                        </form>

                    </div>
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">What you need to do for today </h3>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <td>#</td>
                            <td>Denumire</td>
                            <td>Edit</td>
                            <td>Delete</td>

                        </tr>

                        <?php
                        
                              while($row=mysqli_fetch_assoc($result))
                              {
                                $id= $row['id'];
                              $name=$row['nume'];
                              
                              
                          ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $name ?></td>
                            <td><a href="edit.php?GetID=<?php echo $id?>">Edit</a></td>
                            <td><a href="backand.php?DelID=<?php echo $id?>">Delete</a></td>
                        </tr>
                        <?php
                              }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>