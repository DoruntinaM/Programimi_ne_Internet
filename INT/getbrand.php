<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 80%;
    padding: 12px 20px;
    margin: 4px 15px;
    border-collapse: collapse;
    margin-left: 100px;
    align-content: center;
    text-align: center;
}

table, td, th {
    border: 1px solid black;
    padding: 5px ;
    margin-left: 100px;
}

th {text-align: center;}
    
</style>
</head>
<body>

<?php
include('LidhjaDB.php');
$q = intval($_GET['q']);

$con = connectDB();
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"brands");
$sql="SELECT * FROM brands WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>Origin</th>
<th>Number of Rings Available</th>
<th>Number of Earrings Available</th>
<th>Number of Bracelets Available</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['origin'] . "</td>";
    echo "<td>" . $row['nrRings'] . "</td>";
    echo "<td>" . $row['nrEarrings'] . "</td>";
    echo "<td>" . $row['nrBracelets'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>