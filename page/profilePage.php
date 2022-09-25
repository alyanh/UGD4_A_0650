<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="body d-flex justify-content-between">
<h4>PROFILE</h4>
</div>
<hr>
<table class="table">
<thead>
<tr>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Phone Number</th>
<th scope="col">Membership</th>
</tr>
</thead>
<tbody>
<?php
$query = mysqli_query($con, "SELECT * FROM users") or
die(mysqli_error($con));
if (mysqli_num_rows($query) == 0) {
echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
}else{
$no = 1;
while($data = mysqli_fetch_assoc($query)){
echo'
<tr>
<td>'.$data['name'].'</td>
<td>'.$data['email'].'</td>
<td>'.$data['phonenum'].'</td>
<td>'.$data['membership'].'</td>
</td>
</tr>';
}
}
?>
</tbody>
</table>
</div>
</aside>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</body>
</html>