<?php
include '../component/sidebar.php';
$sql=mysqli_query($con,"select * from movies where id='$_GET[id]'");
$data=mysqli_fetch_array($sql);
?>

<html>
<head>
    <title>Add Movie</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Genre</td>
                <td><input type="text" name="genre"></td>
            </tr>
            <tr> 
                <td>Realese</td>
                <td><input type="text" name="realese"></td>
            </tr>
            <tr> 
                <td>Season</td>
                <td><input type="text" name="season"></td>
            </tr>
            <tr> 
                <td>Episode</td>
                <td><input type="text" name="episode"></td>
            </tr>
            <tr> 
                <td>Synopsis</td>
                <td><input type="text" name="synopsis"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into movies table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        $episode = $_POST['episode'];
        $synopsis = $_POST['synopsis'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert movie data into table
        $result = mysqli_query($mysqli, "INSERT INTO movies(name,genre,realese,season,episode,synopsis) VALUES('$name','$genre','$realese','$season','$episode','$synopsis')");
        
        // Show message when movie added
        echo "Movies added successfully. <a href='index.php'>View Movies</a>";
    }
    ?>
</body>
</html>