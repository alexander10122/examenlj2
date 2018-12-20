<?php
session_start();
include_once('../config.php');
//als de zoek knop op de formulier wordt ingedrukt dan wordt deze if-statement actief
if(isset($_POST['search'])) {

    $searchq = $_POST['search'];

    //voert een sql query uit
$query = mysqli_query($con, "SELECT * FROM posts WHERE title LIKE '%$searchq%' OR content LIKE '%$searchq%'") or die("Could not search!");
//stopt het aantal posts in de variable $count als nummers
$count = mysqli_num_rows($query);
//als er 0 resultaten zijn laat dan een echo zien
if($count == 0) {
    $output = "there was no search results!";
}
//als er wel resultaten aanwezig zijn voer dan dit uit, voer deze while loop uit totdat je alle resultaten heb geecho't
else {
    while($row = mysqli_fetch_array($query)) {
        $title = $row['title'];
        $content = $row['content'];
        $date = $row['date'];
        $id = $row['id'];
//maakt een variable $output aan en stop daar alle posts in die je uit de while loop krijgt
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
<!--print de gegevens dat in variable $output zit-->
<?php print("$output"); ?>
</body>
    <footer></footer>
</html>
