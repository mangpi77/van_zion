
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
            <td><a href=javascript:void(0); style='margin-left:10px' onclick=myFunction(this.name) name='{$song['title']}'>{$song['title']}</a><td>
            <td> <!-- <a style='margin-left:10px'>{$song['number']} -->  <br> <!--</a> --> </td>
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
            <td><a href=javascript:void(0); style='margin-left:10px' onclick=myFunction(this.name) name='{$song['title']}'>{$song['title']}</a><td>
            <td> <!-- <a style='margin-left:10px'>{$song['number']}  --> <br> <!-- </a> --> </td>
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
    <link rel="stylesheet" href="songs.css">
    <link rel="stylesheet" href="../theme.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i">
    <script src="bootstrap/scripts/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        a{
            text-decoration:none;
        }
 
    </style>

</head>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="components/script.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
<div class = "wrapper">    
<div class="container">
        <div class="row">
            <?php include '../components/details_menu.php'?>

          <form action="details.php" method="post" hidden>
                        <input type="text" name="search" id="search2"
                            class="form-control form-control-lg rounded-0 border-primary width =250px;"
                            placeholder="Search..." autocomplete="off" required="">
                        <input type="submit" id='searchclick' name="submit" value="Search"
                            class="btn btn-primary rounded-right">
                    </form>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<script>
const btn = document.getElementById('title');

btn.addEventListener('click', function onClick() {
  btn.style.backgroundColor = 'red';
  btn.style.color = 'black';
});

    
</script>
             <div class ="tablink" onclick="openPage('title', this)" id="defaultOpen">TITLE IN HAWL</div>
               
             <div class ="tablink" onclick="openPage('key', this)">KEY IN HAWL</div>
            <div id="title" class="tabcontent">
                <div class="background">

                    <div class="column" >
                            <h4>(A - M)</h4>
                            <?php
                        echo

                       $left_column
                        ?>

                        </div>
                    </div>
                    <div class="column">
                            <h4>(N - Z)</h4>
                            <?php
                        echo
                        $right_column
                        ?>
                        </div>
                    </div>



            <div id="key" class="tabcontent">
                <div class="background-color-1">

                    <div class="column">
                       
                            <?php
                        echo
                        $left_column2
                        ?>
                        </div>


                    </div>
                    <div class="column">
                        
                            <?php
                        echo
                        $right_column2
                        ?>
                        </div>
                    </div>

        </div>
            <?php require_once '../components/footer_main.php';?>
        


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
    <script>
    function myFunction(a) {

        //  alert(a);
        $("#search2").val(a);
        $("#searchclick").trigger("click");
    }
    </script>

    <!-- scroll up -->
    <?php require_once '../components/scroll.php'; ?>

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