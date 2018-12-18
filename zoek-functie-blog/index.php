<?php
session_start();
include_once('../config.php');

if(isset($_POST['search'])) {
    $searchq = $_POST['search'];

$query = mysqli_query($con, "SELECT * FROM posts WHERE title LIKE '%$searchq%' OR content LIKE '%$searchq%'") or die("Could not search!");
$count = mysqli_num_rows($query);
if($count == 0) {
    $output = "there was no search results!";

}else {
    while($row = mysqli_fetch_array($query)) {
        $title = $row['title'];
        $content = $row['content'];
        $date = $row['date'];
        $id = $row['id'];

        $output .= '<div style="background-color: #8CC63E">'.'Date: '.$date.'<br>'.'Titel: '.$title.'<br>'.'inhoud: '.$content.'';
    }
}
}
?>
<!DOCTYPE html>
<html style="background-color: #8CC63E; text-align: center">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technolab - zoeken..</title>
</head>
<header>
</header>
<body>
<form action="index.php" method="POST" style="background-color: #8CC63E">
    <input type="text" name="search" placeholder="zoeken"/>
    <button type="submit" name="submit-zoeken">Zoeken</button>
</form>
<?php print("$output"); ?>
</body>
    <footer></footer>
</html>
