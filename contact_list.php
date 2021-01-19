<?php

include("connection/connection.php");

$sql="SELECT * FROM contact";
$result=($connection->query($sql));
$row=mysqli_num_rows($result);
if($row>=1)
{ ?>
    <table><tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th></tr>
    <?php while ($r=mysqli_fetch_assoc($result)) { ?>
        <tr><td><?php echo $r['id']; ?></td><td><?php echo $r['name']; ?></td><td><?php echo $r['email']; ?></td><td><?php echo $r['message']; ?></td></tr>
    <?php }
    echo "</table>";
}
else {
    echo "No user found";
}

?>