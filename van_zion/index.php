<?php
  require_once 'config.php';
  //$sql = 'SELECT id, title FROM song ORDER BY title ASC;';
  $sql = "SELECT * FROM song ORDER BY count DESC LIMIT 10";
  $stmt = $conn->prepare($sql);
  $stmt->execute(['title' => $title]);
  
  // fetch all rows
  $songTitle = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHRISTIAN HLABU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="theme.css">
    <link rel="stylesheet" href="stylesheet.css">

</head>

<body class="bg-primary">

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8 mx-auto rounded p-4" style="background-color:#ffffff">
                <h5 class="text-center"><img src="./uploads/icons/logo_color.png" width="200" height="200">
                    <hr class="my-1">
                    <p class="text-center text-dark">A hnuai ah hla hmin ngan aw la hawl aw</p>
                    <a class="text-center text-dark" href='page/songs.php'>View All Songs</a>
                    <?php require_once 'components/search_bar.php';?>
            </div>
            <div class="col-8 mx-auto" style="position: relative;margin-top: -38px;margin-left: 215px;">
                <div class="list-group" id="show-list">
                    <!-- Here autocomplete list will be display -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="components/script.js"></script>
</body>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12 mx-auto rounded p-4" style="background-color:#ffffff">
            <div class="table-wrapper">
                <p style="color:black">Top 10 views tam bik</p>
                <table class="fl-table">
                    <tr>
                        <th style="background-color:#083358; color:white"></th>
                        <th style="background-color:#083358; color:white; width:80%">Title</th>
                        <th style="background-color:#888888; color:white;">Views</th>
                    </tr>
                    <?php // display the song title and chord  
                    foreach ($songTitle as $song) {
                    echo "<tr>";
                    echo "<td><img width='30px' height='30px' src='./uploads/icons/note.png' style='margin-left:20px' /></td>";
                    echo "<td><a color: #2a7dc4' href='page/details.php?id={$song['id']}'>{$song['title']} <br> </a></td>";
                    echo "<td><a style='margin-left:10px; color: #2a7dc4'>{$song['count']}   <br> </a></td>";
                    } ?>

                    </tr>
                </table>
            </div>

        </div>


    </div>

    <div class="footer mt-1">
        <?php require_once 'components/footer.php';?>
    </div>
</div>

</html>