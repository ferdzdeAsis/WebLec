<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit-no">
        <link rel="stylesheet" href="../style.css">
        <Script type="text/javascript" src="#"></Script>
        <title>Course Website</title>  
    </head>
    
    <body>  
        <div class="navbar">
            <a href="../index.php">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Topics</button>
                <div class="dropdown-content">
					<a href="http.php">HTTP</a>
					<a href="html.php">HTML</a>
					<a href="css.php">CSS</a>
                </div>
            </div> 
            <a href="about.php">About Us</a>
            <a href="references.php">References</a>
            <a href="quiz.php">Take the quiz</a>
        </div>
        <div>
            <form action="checkanswer_ss.php" method="POST" target="_blank">
            <?php
            /*
            Code by: Florendo,Edson M.
            Description:
            Collects the questions in the database and then presents it.
            Randomizing questions is done by shuffling the array.
            
            */
            include("questions.php");
                $db = new mysqli("p:localhost", "root", "", "quiz");
                $query = "Select idserverside_quiz, question, answer
                          FROM serverside_quiz limit 10";
                $stmt = $db->stmt_init();
                $stmt->prepare($query);
                $stmt->execute();
                $stmt->bind_result($a,$b,$c);
                $counter = 1;
                $x = 0;
                while($stmt->fetch()){
                    $question = new questions($a,$b,$c);
                    $d[] = $question;
                }
                shuffle($d);
                while($x < count($d) ){
                    $e = $d[$x];
                    $f = $e->get_question();
                    $g = $e->get_Id();
                    echo "<p>". $counter .". " . $f . "</p>";
                    echo "<p> Answer:<input type=\"text\" name=". $g ."></p>";
                    echo "<br>";
                    $counter = $counter + 1;
                    $x = $x + 1;
                }
            
                $stmt->close();
                
            ?>
            <p><input type="submit" value="check answer"></p>
            </form>
        </div>
		
        <br>
        <footer class="footer-site">
			<div class="footer-left">
				<p>Web Systems & Technologies &copy; 2019</p>
			</div>
		 </footer>

        <script src="js/bootstrap.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>