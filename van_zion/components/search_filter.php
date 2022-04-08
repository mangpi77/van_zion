<?php
  require_once '../config.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = 'SELECT id, title, chord FROM song WHERE title LIKE :title';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['title' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();
  
    echo'<table>';
    if ($result) {
      foreach ($result as $row) {
        
        echo "<tr>";
        echo "<td><a href='page/details.php?id={$row['id']}'>{$row['title']} <br> </a></td>";
        echo "<td><a style='margin-left:10px'>{$row['chord']}   <br> </a></td>";
      }
    } else {
    
    }

    echo'</table>';

  }
?>