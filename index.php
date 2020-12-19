<?php require('process.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>BMI Counter</title>
</head>

<body>
    <h1 class="text-center mt-4">BMI Counter</h1>
    <div class="container pt-3">
        <form autocomplete="off" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" >
            <div class="mb-3 mt-4">
                <label class="form-label">Enter your height in meters</label>
                <input type="text" name="height" class="form-control" id="input1">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter your weight in kg</label>
                <input type="text" name="mass" class="form-control" id="input2">
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Count</button>
        </form>
        <div>
            <p class="text-center mt-5 fs-1">
                <?php echo "Your BMI value is " . $bmi . " and you are : ";
                echo "$output"; ?>
                <img src="<?php echo $image;?>">
            </p>
        </div>
    </div>
</body>

</html>