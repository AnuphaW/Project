<?php
$staffname = "";
$faculty = "";
$department ="";

$errorMessage="";
$SuccessMessage="Memorized";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $staffname = "";
    $faculty = "";
    $department ="";

do {
    if (empty($staffname)||empty($faculty)||empty($department)){
        $errorMessage = "Not memorized";
        break;

        $staffname = "";
        $faculty = "";
        $department ="";

        $SuccessMessage="Memorized";
    }
}while(false);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>ADD DATA</h2>
        <from method="post">
        <div class="row mb-3">
                <label class ="col-sm-3 col-from-label">Staffname</label>
            <div class="col-sm-6">
                <input type="text" class="from-control" name="name" value="<?php echo $staffname ?>"> 
            </div>
        </div>
        <div class="row mb-3">
                <label class ="col-sm-3 col-from-label">faculty</label>
            <div class="col-sm-6">
                <input type="text" class="from-control" name="faculty" value="<?php echo $faculty ?>"> 
            </div>
        </div>
        <div class="row mb-3">
                <label class ="col-sm-3 col-from-label">department</label>
            <div class="col-sm-6">
                <input type="text" class="from-control" name="department" value="<?php echo $department ?>"> 
            </div>
        </div>
        <div class="row mb-3">
                <button class ="offset-sm-3 col-sm-3 d-grid">Submit</button>
            <div class="col-sm-3 d-grid">
                <button type="btn btn-outline-primary" href="/index.php" role="button">Cancel </button>
            </div>
        </div>
        
            
        </from>
    </div>
</body>
</html>