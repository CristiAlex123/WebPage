<?php
require_once "connection.php";
$sql="SELECT * FROM images";
if(isset($_POST["search"])){
$search_term= mysqli_real_escape_string($con, $_POST["search_box"]);
$sql.="WHERE title='{$search_term}'";
$sql.="OR id='{$search_term}'";
}
$query= mysqli_query($con, $sql)or die(mysqli_error($con));
?>
<form name="search_form" method="post" action="search.php">
Search: <input type="text" name="search_box" value=""/>
<input type="submit" name="search" value="Search the table">
<input type="reset" value="Reset"/>
</form>
<table width="70" cellpadding="4" cellspace="4">
<tr>
    <th>Id</th>
    <th>Title</th>
    <th>Image</th>
</tr>
<?php while($row=mysqli_fetch_array($query)){ ?>
<tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["title"];?></td>
    <td><?php
                            $sql="SELECT * FROM images WHERE ID='{$_GET['id']}'";
                            $query= mysqli_query($con,$sql)or die(mysqli_error($con));
                            $row=mysqli_fetch_array($query);
                            echo "Nume: ".$row["title"]."<br/>";
                            echo "<img src=".$row['image']."><br/>";
                        ?></td>
</tr>
<?php } ?>
</table>
    
