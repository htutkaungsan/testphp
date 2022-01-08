<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All BOOK List</title>
</head>
<body>
    

<h1>Category List</h1>

<?php

include("confs/config.php");
$result = mysqli_query($conn, "SELECT * FROM categories"); 

?>

<ul>

<?php while($row = mysqli_fetch_assoc($result)): ?>
<li title="<?php echo $row['remark'] ?>"> 
[ <a href="cat-del.php?id=<?php echo $row['id'] ?>" class="del">del</a> ]
[ <a href="cat-edit.php?id=<?php echo $row['id'] ?>">edit</a> ]
<?php echo $row['name'] ?></li>
<?php endwhile; ?>

</ul>

<a href="cat-new.php" class="new">New Category</a>


</body>
</html>