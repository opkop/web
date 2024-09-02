<?php
require_once "dbConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_type = $_POST['search_type'];
    $keyword = $_POST['search_keyword'];
    $download = $_POST['download_type'];

    $result = mysqli_query($conn, "INSERT INTO searches (`search_type`, `keyword`, `download`) VALUES ('$search_type', '$keyword', '$download')");
    if (!$result) {
        die("<font color='red'>Error Inserting. " . mysqli_error($conn) . "</font><br/>");
    }

    echo "<p><font color='green'>Search Data added successfully!</p>";
    echo "<a href='list_search.php'>View Result</a>";
}

mysqli_close($conn);
