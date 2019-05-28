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
     <br>
    <br>
    <div class="qendra">
    <?php
    echo "<h3>".$_SESSION['username']." shkruaj username-in e ri me poshte :)";
    ?>
    </div>
    
    
    <input  name="usernameri" type="text" placeholder="Username i ri" required autofocus >
    
    <br>
    
    <button class= "nbutoni"  type="submit" name="ndrysho">Ndrysho</button>	            
    </form>
    
    <form action="ndryshoFshij.php" method="POST">
    <button class= "fbutoni" type="submit" name="fshij">Fshije Accountin</button>
    </form>

    <style>
        body {
            background-color: whitesmoke;
        }
        
        .nbutoni{
        font-family: Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
		font-size: 18px;
		line-height: 18px;
		border-radius: 5px;
		border: 1px solid #888;
		padding: 7px;
		background-color:rgb(197, 52, 52);
		cursor: pointer;
        width: 150px;
        margin-left: 540px;
        margin-bottom: 5px;
        align-content: center;
        }
        
         .fbutoni{
        font-family: Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
		font-size: 18px;
		line-height: 18px;
		border-radius: 5px;
		border: 1px solid #888;
		padding: 7px;
		background-color:rgb(197, 52, 52);
		cursor: pointer;
        width: 150px;
        margin-left: 540px;
        margin-bottom: 5px;
        align-content: center;
        }
        
        .qendra{
            margin: auto;
            width: 40%;
            padding: 5px;
        }
        
          input[name=usernameri], select {
            width: 30%;
            padding: 12px 20px;
            margin: 4px 15px;
            border-radius: 4px;
            background-color: gainsboro;
            border: none;
            margin-left: 410px;
            font size: 15px;
            margin-bottom: 10px;
            
        }
    

        
    
    
    </style>
    <br>
    <br>
    <br>
    
    <?php
    include('footer.php');
    ?>
</html>
<?php
}
?>