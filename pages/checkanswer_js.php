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
					<a href="pages/javascript.php">JavaScript</a>
                </div>
            </div> 
            <a href="about.php">About Us</a>
            <a href="references.php">References</a>
            <a href="quiz.php">Take the quiz</a>
        </div>
        <div>
            <?php
                /*
                Code by:Florendo, Edson M.
                Description:
                Checks the answer by using the id supplemented by the last page
                */
            
            include("questions.php");
            $db = new mysqli("p:localhost", "root", "", "quiz");
            $query = "Select * FROM javascript_quiz";
            $stmt = $db->stmt_init();
            $stmt->prepare($query);
            $stmt->execute();
            $stmt->bind_result($a,$b,$c);
            while($stmt->fetch()){
                $question = new questions($a,$b,$c);
                $d[] = $question;
            }
            $counter = 1;
            while($counter <= 10){
                $e = $_POST[$counter];
                $f[] = $e;
                $counter = $counter + 1;
            }
            $g =0;
            $answer;
            $correct = 0;
            while($g < count($f)){
                $id = $d[$g]->get_Id();
                $ques = $d[$g]->get_question();
                $h = $d[$g];
                $submittedAnswer = $f[$g];
                $correctAnswer = $h->get_answer();
                if(strcasecmp($submittedAnswer,$correctAnswer) == 0){
                    echo "<p>". $id .".". $ques ."</p>";
                    echo "<p> Your Answer \"". $submittedAnswer ."\"is correct </p>";
                    echo "<br>";
                    $correct = $correct + 1;
                }else{
                    echo "<p>". $id .".". $ques ."</p>";
                    echo "<p> Your Answer \"". $submittedAnswer ."\" is incorrect</p>";
                    echo "<p> The correct answer is: ". $correctAnswer ."</p>";
                    echo "<br>";
                }
                $g = $g +1;
            }
            
            echo "<p>Your Score is:". $correct ."/ 10.</p>";
            ?>
        </div>
        <footer class="footer-site">
			<div class="footer-left">
				<p>Web Systems & Technologies &copy; 2019</p>
			</div>
		 </footer>

        <script src="js/bootstrap.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>