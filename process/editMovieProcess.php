<?php
include "listMoviesPage.php";
$sql=mysqli_query($listMoviesPage,"select * from movies where id='$_GET[id]'");
$data=mysqli_fetch_array($sql);
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="body d-flex justify-content-between">

<h3> Edit Movies </h3>

<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<table>
    <tr>
        <td> Name </td>
        <td> <input type="text" name="name" value="<?php echo $data['name']; ?>"> </td>
    </tr>
    <tr>
        <td> Genre </td>
        <td> <input type="text" name="genre" value="<?php echo $data['genre']; ?>"> </td>
    </tr>
<td> Realese </td>
        <td> <input type="text" name="realese" value="<?php echo $data['realese']; ?>"> </td>
    </tr>
<td> Season </td>
        <td> <input type="text" name="season" value="<?php echo $data['season']; ?>"> </td>
    </tr>
<td> Synopsis </td>
        <td> <input type="text" name="synopsis" value="<?php echo $data['synopsis']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>
</table>

</form>

<?php
include "listMoviesPage.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "update movies set  
name = '$_POST[name]',
genre = '$_POST[genre]',
realese = '$_POST[realese]',
season = '$_POST[season]',
synopsis = '$_POST[synopsis]'
where id = '$_GET[id]'");

echo "Data Movies telah diubah";
echo "<meta http-equiv=refresh content=1;URL='listMoviesPage.php'>";

}

?>