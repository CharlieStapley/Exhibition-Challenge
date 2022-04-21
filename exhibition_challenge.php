<?php
/*$name1 = $_POST('name1');
$name2 = $_POST('name2');
$name3 = $_POST('name3');
$name4 = $_POST('name4');
$name5 = $_POST('name5');
$name6 = $_POST('name6');*/
if(isset($_GET["name1"]) && $_GET["name1"] != ""){
    $name1 = $_GET["name1"];
} else {
    $name1 = "1";
}
if(isset($_GET["name2"]) && $_GET["name2"] != ""){
    $name2 = $_GET["name2"];
} else {
    $name2 = "2";
}
if(isset($_GET["name3"]) && $_GET["name3"] != ""){
    $name3 = $_GET["name3"];
} else {
    $name3 = "3";
}
if(isset($_GET["name4"]) && $_GET["name4"] != ""){
    $name4 = $_GET["name4"];
} else {
    $name4 = "4";
}
if(isset($_GET["name5"]) && $_GET["name5"] != ""){
    $name5 = $_GET["name5"];
} else {
    $name5 = "5";
}
if(isset($_GET["name6"]) && $_GET["name6"] != ""){
    $name6 = $_GET["name6"];
} else {
    $name6 = "6";
}

?>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/15ccf98433.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="exhibition_challenge.css">
    <title>Exhibition Challenge</title>
</head>
<style>
    table, th, td {
        border:1px solid black;
    .error {color: #FF0000;}
</style>
<div id="form">
    <label>Enter player names // assign roles</label>
    <form action="exhibition_challenge.php" method="get">
        Player 1 (Shard & Blight): <label>
            <input type="text" autocomplete="nope"  name="name1">
        </label><br>
        Player 2 (Shard & Blight): <label>
            <input type="text" autocomplete="nope" name="name2">
        </label><br>
        Player 3 (Shard & Aegis): <label>
            <input type="text" autocomplete="nope" name="name3">
        </label><br>

        Player 4 (Splint [easiest]): <label>
            <input type="text" autocomplete="nope" name="name4">
        </label><br>
        Player 5 (Shard & Aegis): <label>
            <input type="text" autocomplete="nope" name="name5">
        </label><br>
        Player 6 (Shard & Aegis): <label>
            <input type="text" autocomplete="nope" name="name6">
        </label>
        <br>

        <input type="submit" name="generate" value="Generate">
    </form>
</div>
<div id="table">
    Person assigned to shard 1 kills the first knight, drops it, then person assigned to shard 2 kills the second knight.<br>
    Second knight in the second room is skipped else the challenge will fail.
    <table>
        <tr>
            <th></th>
            <th>Shard 1</th>
            <th>Shard 2</th>
            <th>Aegis</th>
            <th>Blight</th>
        </tr>
        <tr>
            <td>Room 1</td>
            <td><?php echo $name1;?></td>
            <td>~</td>
            <td>~</td>
            <td>~</td>
        </tr>
        <tr>
            <td>Room 2</td>
            <td><?php echo $name2;?></td>
            <td>~</td>
            <td><?php echo $name5;?></td>
            <td>~</td>
        </tr>
        <tr>
            <td>Room 3</td>
            <td><?php echo $name3;?></td>
            <td><?php echo $name5;?></td>
            <td><?php echo $name6;?></td>
            <td><?php echo $name1;?></td>
        </tr>
        <tr>
            <td>Room 4</td>
            <td><?php echo $name4;?></td>
            <td><?php echo $name6;?></td>
            <td><?php echo $name3;?></td>
            <td><?php echo $name2;?></td>
        </tr>
    </table>
</div>
<div id="contact">
    <br><br>
    Created by Charlie Stapley<br>
    Any problems, feedback or queries? Contact me on:<br>
    <a href="https://twitter.com/computercks" style="text-decoration:none">
        <i class="fab fa-twitter-square fa-lg" style="color: dodgerblue;"></i>
    </a> @computercks
    <br>
    <a href="mailto:computercks232@gmail.com?Subject=DnDspells%20Feedback." style="text-decoration:none">
        <i class="far fa-envelope fa-lg" style="color: black;"></i>
    </a> computercks232@gmail.com
    <br>
    <a href="https://discordapp.com/users/535065206385016842" style="text-decoration:none">
        <i class="fab fa-discord fa-lg" style="color: dimgrey;"></i>
    </a> CharlieStapley#3004
</div>
</html>