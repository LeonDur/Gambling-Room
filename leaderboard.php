<?php
        session_start();

        $_SESSION["p1Score"];
        $_SESSION["p2Score"];
        $_SESSION["p3Score"];
        $_SESSION["p1"];
        $_SESSION["p2"];
        $_SESSION["p3"];
        $_SESSION["stevKoc"];
        $_SESSION["stevMet"];
        $_SESSION["stevVrz"];
        $max=$_SESSION["p1Score"];

        for($x=0;$x<3;$x++){
            if($max<$_SESSION["p2Score"])
                $max=$_SESSION["p2Score"];
            else if($max<$_SESSION["p3Score"]){
                $max=$_SESSION["p3Score"];
            }
        }
?>
<!DOCTYPE html>
<html lang="sl">
	<head>
        <title>The high table</title>
		<meta charset="utf-8" >
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="slike/kocka.png">
        <script src="js/konec.js"></script>

	</head>
	<body onload="redirTimer()">
        <h1>Results:</h1>
        <div id="centerK">
            <form name="Obrazec" id="Obrazec" method="post" autocomplete="off" action="game.php">
                <div id="zmagovalec">
                    <?php if($max==$_SESSION["p1Score"]){echo 'Congratulations '.$_SESSION["p1"].', you won!';} ?>
                    <?php if($max==$_SESSION["p2Score"]){echo 'Congratulations '.$_SESSION["p2"].', you won!';} ?>
                    <?php if($max==$_SESSION["p3Score"]){echo 'Congratulations '.$_SESSION["p3"].', you won!';} ?>
                </div>
                <div class="igralciK">
                    <?php echo $_SESSION["p1"];  ?></br>
                    <?php echo $_SESSION["p1Score"];  ?></br>
                </div>
                <div class="igralciK">
                    <?php echo $_SESSION["p2"];  ?></br>
                    <?php echo $_SESSION["p2Score"];  ?></br>
                </div>
                <div class="igralciK">
                    <?php echo $_SESSION["p3"];  ?></br>
                    <?php echo $_SESSION["p3Score"];  ?></br>
                </div>
                <div class="spodiK">
                    You will be redirected in <span id="time">10</span> seconds.
                </div>
            </form>
        </div>
	</body>
</html>