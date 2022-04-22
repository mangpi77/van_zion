<?php
require_once '../config.php';
//$sql = 'SELECT id, title FROM song ORDER BY title ASC;';
$sql = "SELECT * FROM song ORDER BY title ASC";
$stmt = $conn->prepare($sql);
$stmt->execute();

// fetch all rows
$songs = $stmt->fetchAll(PDO::FETCH_ASSOC);
$grouped = [];
foreach ($songs as $song) {
    $initial = strtoupper($song['title'][0]);
    $grouped[$initial][] = $song;
}
list($left, $right) = array_chunk($grouped, ceil(count($grouped) / 2), true);
function print_songs(array $songs)
{

    $html = '';
    foreach ($songs as $letter => $songsByLetter) {
        $html .= "<br><h4>" . $letter . "</h4>";
        echo'<table>';
        foreach ($songsByLetter as $song) {
            $html .= "
            <tr>
            <td><a href='details.php?id={$song['id']}'; style='margin-left:10px' onclick=myFunction(this.name) name='{$song['title']}'>{$song['title']}</a><td>
            <td><a style='margin-left:10px'>{$song['number']}   <br> </a></td>
            ";

        }
        echo'</table>';
        $html .= "";
    }
    return $html;
}

$left_column = print_songs($left);
$right_column = print_songs($right);
?>

<?php
  require_once '../config.php';
  //$sql = 'SELECT id, title FROM song ORDER BY title ASC;';
  $sql = "SELECT * FROM song ORDER BY title ASC";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
  // fetch all rows
  $songs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
$grouped = [];

foreach($songs as $song) {
    $initial = strtoupper($song['chord'][0]);
	$grouped[$initial][] = $song;
}

// Divide into two sections (as number of alphabets / 2):

list($left, $right) = array_chunk($grouped, ceil(count($grouped) / 2), true);

// Function to output column:

function print_songs2(array $songs) {
	
	$html = '';
	foreach($songs as $letter => $songsByLetter) {
		$html .= "<br><h4>" . $letter . "</h4>";
		foreach($songsByLetter as $song) {
            $html .= "
            <tr>
            <td><a href='details.php?id={$song['id']}'; style='margin-left:10px' onclick=myFunction(this.name) name='{$song['title']}'>{$song['title']}</a><td>
            <td><a style='margin-left:10px'>{$song['number']}   <br> </a></td>
            ";
		}
        $html .= "";
	}
	return $html;
}

$left_column2 = print_songs2($left);
$right_column2 = print_songs2($right);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheet.css">
    <link rel="stylesheet" href="../theme.css">
    <link rel="stylesheet" href="songs.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i">
    <script src="bootstrap/scripts/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="bg-primary">

    </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="components/script.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <div class="container mx-auto">
        <div class="row text-left">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="../"><strong><embed src="../uploads/icons/logo_full_color.png"
                            height="87px" width=150px"></strong></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>

                </div>
            </nav>
            <button class="tablink" onclick="openPage('title', this, 'grey')" id="defaultOpen">A THULU IN
                HAWLNAK</button>
            <button class="tablink" onclick="openPage('key', this, 'grey')">A KEY IN HAWLNAK</button>
            <div id="title" class="tabcontent">
                <div class="background-color-1">

                    <div class="column">

                        <div style="margin-left:80px">
                            <h2><i>( A - M )<i></h2>
                            <?php
                        echo
                        $left_column
                        ?>
                        </div>

                    </div>
                    <div class="column">
                        <div style="margin-left:100px">
                            <h2><i>( N - Z )<i></h2>
                            <?php
                        echo
                        $right_column
                        ?>
                        </div>
                    </div>

                </div>
            </div>

            <div id="key" class="tabcontent">
                <div class="background-color-1">

                    <div class="column">
                        <div style="margin-left:80px">
                            <?php
                        echo
                        $left_column2
                        ?>
                        </div>

                    </div>
                    <div class="column">
                        <div style="margin-left:190px">
                            <?php
                        echo
                        $right_column2
                        ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="footer mt-1">
            <?php require_once '../components/footer.php';?>
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>


</body>


</html>


<script>
function openPage(pageName, elmnt, color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>