<?php
include('header.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include __DIR__.'/LidhjaDB.php';
    $usernameIRI = $_POST['usernameri'];
    $db = connectDB();
    $escapedUsername = $db->real_escape_string($usernameIRI);
    $query1 = "update users set username=".$escapedUsername." where username=".$_SESSION['username'];
    $query2 = "delete from users where username=".$_SESSION['username'];
    if (isset($_POST['ndrysho'])) {
        $db->query($query1);
        $_SESSION['username'] = $usernameIRI;
        header("Location: ndryshoFshij.php");
    }elseif(isset($_POST['fshij'])){
        $db->query($query2);
        header("location: logout.php");
    }else{
        header("location: ndryshoFshij.php");
    }
}else{
?>
<!doctype html>
<html>
<form action ="ndryshoFshij.php" method="POST"  autocomplete="on">

    <?php
    echo "<h3>".$_SESSION['username']." shkruaj username-in e ri me poshte :)";
    ?>
    <input name="usernameri" type="text" placeholder="Username i ri" required autofocus >

    <button type="submit" name="ndrysho">Ndrysho</button>	            
    </form>
    <form action="ndryshoFshij.php" method="POST">
    <button  type="submit" name="fshij">Fshije Accountin</button>
    </form>
                            <?php
                            include('footer.php');
                            ?>
</html>
<?php
}
?>