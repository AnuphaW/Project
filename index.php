<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class ="Container">
        <h2>DATA</h2>
        <a class="btn btn-primary" href="/showdata.php" role="button">New employer</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Staff Name</th>
                    <th>Faculty</th>
                    <th>Depatment</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password ="";
                $database ="employ";

                $connection = new mysqli($servername,$username,$password,$database);
                
                if($connection->connect_error){
                    die("Connection failed".$connection->connect_error);
                }

                $sql ="SELECT * FROM employer";
                $result = $connection->query($sql);
                
                if(!$result){
                    die("Invalid query:". $connection->error);
                }

                while($row = $result->fetch_assoc()){
                    echo"
                    <tr>
                        <td>$row[staffname]</td>
                        <td>$row[faculty]</td>
                        <td>$row[department]</td>
                    <td>
                    <a class='btn btn-primary btn-sm' href='/showdata.php?id=$row'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='/showdata.php?id=$row'>Delete</a>
                    </td>
                    
                     </tr>
                    ";
                }
                ?>
                <td>
                    <a class="btn btn-primary btn-sm" href="/showdata.php">Edit</a>
                    <a class="btn btn-danger btn-sm" href="/showdata.php">Delete</a>
                </td>
            </tbody>
        </table>
    </div>
   
</body>
</html