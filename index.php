<?php include './connection/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Test Test</title>
    <!-- Style/Font -->
    <link rel="stylesheet" type="text/css" href="ok.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <!-- Vendor -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!-- Date -->
    <script src="script.js"></script>
</head>

<body>
    <!-- body -->
    <div class="background align-middle">
        <div class="row-xs d-flex justify-content-center">
            <div class="col-xs-6">
                <body onload="startTime()">
                    <div id="clockdate">
                        <div class="clockdate-wrapper">
                            <b><h2 align="center" id="date" class="tebel"></h2>
                            <h1 align="center" id="clock" class="tebel"></h1></b>
                        </div>
                    </div>
                    <div class="col-xs-6 tengah justify-content-center noselect">
                        <p>_____________________________ </p>
                    </div>
                    <?php
                    // selain 21
                    if (date("d") != 21){
                    $sql = "SELECT * from pesan ORDER BY RAND() LIMIT 0,1";
                    if ($query = mysqli_query($db, $sql)) {
                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_array($query)) {
                                echo '<div class="col-xs-6 tengah justify-content-center">
                        <h3 class="text-break text-center">"' . nl2br($row['text']) . '"</h3></div>';
                                echo "<div class='col-xs-6 tengah justify-content-center'><p><i>-
                        " . $row['creator'] . " -</i></p>";
                            }
                            mysqli_free_result($query);
                        } else {
                            echo "<div class='col-xs-6 tengah justify-content-center'>Tidak ada pesan.</div>";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                }
                // tanggal 21
                else {
                    $sql = "SELECT * from pesans ORDER BY RAND() LIMIT 0,1";
                    if ($query = mysqli_query($db, $sql)) {
                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_array($query)) {
                                echo '<div class="col-xs-6 tengah justify-content-center">
                        <h3 class="text-break text-center">"' . nl2br($row['text']) . '"</h3></div>';
                                echo "<div class='col-xs-6 tengah justify-content-center'><p><i>-
                        " . $row['creator'] . " -</i></p>";
                            }
                            mysqli_free_result($query);
                        } else {
                            echo "<div class='col-xs-6 tengah justify-content-center'>Tidak ada pesan.</div>";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                }?>
            </div>
        </div>
    </div>
</body>
</body>
</html>