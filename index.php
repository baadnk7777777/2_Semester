<?php 
    session_start();
    include_once('function.php');
    date_default_timezone_set('Asia/Bangkok');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <title>Semester</title>
</head>

<body>
    <div class="container content">
        <div class="semester">
            <h1 class="semester-text">2 Semester <span class="blink">Ending !!!</span> </h1>
            
        </div>

        <div class="day">
            <h1 class="day-text">
                <?php 
                                $sql = "Select  * FROM semester_time";
                                $query = $conn->prepare($sql);
                                $query->execute();
                                $result = $query->fetchAll(PDO::FETCH_OBJ);
                                foreach($result as $res){
                                    ?>
                                    <?php
                                    $date1=date_create(date("Y-m-d"));
                                    $date2=date_create($res->semester_date);
                                    $diff=date_diff($date1,$date2);
                                    echo $diff->format('%m Month %d Day');
                                    ?>
                                    
                                    <?php 
                                }
                ?>
                <br>
                <?php
                echo date("h:i:s");
?>
            </h1>
        </div>

    </div>

</body>

</html>