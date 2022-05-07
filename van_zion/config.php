<?php
  const DBHOST = '162.241.217.237';        // Database Hostname
  const DBUSER = 'cbanaus_user';             // MySQL Username
  const DBPASS = 'WH8M0~5AGIEP';                 // MySQL Password
  const DBNAME = 'cbanaus_songbook';  // MySQL Database name

  // Data Source Network
  $dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME . '';

  // Connection Variable
  $conn = null;

  // Connect Using PDO (PHP Data Output)
  try {
    $conn = new PDO($dsn, DBUSER, DBPASS);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    die('Error : ' . $e->getMessage());
  }
?>