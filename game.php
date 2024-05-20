<?php
    session_start();
    if(isset($_POST["igraj"])){
        $_SESSION["p1Score"]=0;
        $_SESSION["p2Score"]=0;
        $_SESSION["p3Score"]=0;
        $_SESSION["p1"]=$_POST["up1"];
        $_SESSION["p2"]=$_POST["up2"];
        $_SESSION["p3"]=$_POST["up3"];
        $_SESSION["stevKoc"]=$_POST["stKock"];
        $_SESSION["stevMet"]=$_POST["stMetov"];
        $_SESSION["stevVrz"]=0;
    }
    $p1Met=array();
    $p2Met=array();
    $p3Met=array();
    for ($y = 0; $y <$_SESSION["stevKoc"] ; $y++) {
            array_push($p1Met,rand(1,6));
            array_push($p2Met,rand(1,6));
            array_push($p3Met,rand(1,6));
        }
    if($_SESSION["stevVrz"]<$_SESSION["stevMet"]){
        $_SESSION["stevVrz"]++;
        for ($x = 0; $x <sizeof($p1Met) ; $x++) {
        $_SESSION["p1Score"]+=$p1Met[$x];
        $_SESSION["p2Score"]+=$p2Met[$x];
        $_SESSION["p3Score"]+=$p3Met[$x];
        }
    }
?>
<!DOCTYPE html>
<html lang="sl">
	<head>
        <title>The high table</title>
		<meta charset="utf-8" >
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="slike/rdece.png">
	</head>
	<body onload="generate()">
        <h1>The high table</h1>
        <div id="centerI">
            <form name="Obrazec" id="Obrazec" method="post" autocomplete="off" action="<?php if($_SESSION["stevVrz"]==$_SESSION["stevMet"]){echo 'leaderboard.php';}else{echo 'game.php';}?>">
                <div class="igralci">
                    <?php echo $_SESSION["p1"];  ?></br>
                    <?php echo $_SESSION["p1Score"];  ?></br>
                    <?php  for ($x = 0; $x <$_SESSION["stevKoc"] ; $x++) {
                        echo "<img src='slike/dice".  $p1Met[$x]. ".gif' alt='dice1' class='kocke'>";
                    }?>
                </div>
                <div class="igralci">
                    <?php echo $_SESSION["p2"];  ?></br>
                    <?php echo $_SESSION["p2Score"];  ?></br>
                    <?php  for ($x = 0; $x <$_SESSION["stevKoc"] ; $x++) {
                        echo "<img src='slike/dice".  $p2Met[$x]. ".gif' alt='dice1' class='kocke'>";
                    }?>
                </div>
                <div class="igralci">
                    <?php echo $_SESSION["p3"];  ?></br>
                    <?php echo $_SESSION["p3Score"];  ?></br>
                    <?php  for ($x = 0; $x <$_SESSION["stevKoc"] ; $x++) {
                        echo "<img src='slike/dice".  $p3Met[$x]. ".gif' alt='dice1' class='kocke'>";
                    }?>
                </div>
                <div class=spodi>
                        <input type="submit" id="gumb" value="<?php if($_SESSION["stevVrz"]==$_SESSION["stevMet"]){echo 'Results';}else {echo 'Throw';}  ?>">
                    
                        Throw: <?php echo $_SESSION["stevVrz"]  ?>
                </div>
            </form>
        </div>
	</body>
</html>