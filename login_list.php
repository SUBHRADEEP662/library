<?php

include("connection/connection.php");

$sql="SELECT * FROM user";
$result=($connection->query($sql));
$row=mysqli_num_rows($result);
if($row>=1)
{ ?>
    <table><tr><th>ID</th><th>Name</th><th>Email</th><th>Mobile</th><th>Pack</th><th>Password</th></tr>
    <?php while ($r=mysqli_fetch_assoc($result)) { ?>
        <tr><td><?php echo $r['user_id']; ?></td><td><?php echo $r['name']; ?></td><td><?php echo $r['email']; ?></td><td><?php echo $r['mobile']; ?></td><td><?php echo $r['pack']; ?></td><td><?php echo $r['password']; ?></td></tr>
    <?php }
    echo "</table>";
}
else {
    echo "No user found";
}

?>