<title>Cart</title>
<?php
session_start();
if (isset($_POST['sub'])) {
    $select=$_POST['select'];
    if ($select=="Select") {
        echo "Nothing selected";
        echo "<br>Back to <a href='cart.php'>Your cart</a>";
        
    }
    chdir("cart");
    chdir($_SESSION['email']);
    $x=getcwd();
    $y=scandir($x);  
$c=0;
foreach($y as $k=>$v)
{
    if($c>=2){
        if ($c-1==$select) {
            echo getcwd();
            // chdir("cart");
            $a=$_SESSION['email'];
            // chdir('$a');
            echo "<br>".$v;
            if(unlink("$v"))
            {
                header("Location: cart.php");
            }
            else {
                echo "error";
            }
            
        }

    }
    $c=$c+1;
}
}
?>