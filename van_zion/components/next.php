<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--         Next and Previous Page-->
<style>
    a {
        text-decoration: none;
        display: inline-block;
        padding: 8px 16px;
    }

    a:hover {
        background-color: #ddd;
        color: black;
    }

    .previous {
        background-color: #f1f1f1;
        color: black;
    }

    .next {
        background-color: #083358;
        color: white;
    }

    .round {
        border-radius: 50%;
    }
</style>

<?php
$conn = mysqli_connect("localhost", "root", "root", "cbanaus_songbook");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if (!isset($_GET['id'])) {
$id = 1;
} else {
$id = (int)$_GET['id'];
}
$recordsPerPage = 10;
$sql = "select count(*) as total FROM song";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
$recordsPerPage = 1;
//Hla total zoh nak men si ih delete leh ding.
//    echo "<h1 style='color:#083358'>$data[total]</h1>";


$output = $id;
if ($id == 1) {
$output = $id + 1;
echo '<a href="page/details.php?id=' . $output . '" class="next round">&#8250;</a>';
} elseif ($id >= 2 && $id <= (int)$data["total"] - 1) {
$output = $id - 1;
$output2 = $id + 1;
echo '<a href="page/details.php?id=' . $output . '" class="previous round">&#8249;</a>';
echo '<a href="page/details.php?id=' . $output2 . '" class="next round">&#8250;</a>';
} elseif ($id == (int)$data["total"]) {
$output = $id - 1;
echo '<a href="page/details.php?id=' . $output . '" class="previous round">&#8249;</a>';
}

?>
</body>
</html>

