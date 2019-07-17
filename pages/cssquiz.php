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
            <a href="../index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Topics</button>
                <div class="dropdown-content">
					<a href="http.html">HTTP</a>
					<a href="html.html">HTML</a>
					<a href="css.html">CSS</a>
                </div>
            </div> 
            <a href="about.html">About Us</a>
            <a href="references.html">References</a>
            <a href="quiz.html">Take the quiz</a>
        </div>
        
        <div>
            <?php
                $db = new mysqli("p:localhost", "root", "", "quiz");
                $query = "Select question
                          FROM css_quiz";
                $stmt = $db->stmt_init();
                $stmt->prepare($query);
                $stmt->execute();
                $stmt->bind_result($question);
                $stmt->fetch();
                $counter = 1;
                while($stmt->fetch()){
                echo "<p>". $counter ."." . $question . "</p>";
                echo "<p> Answer:<input type=\"text\" name=\"ans1\"></p>";
                $counter = $counter + 1;
                }
                
            ?>
        </div>
         <footer class="footer-site">
			<div class="footer-left">
				<p>Web Systems & Technologies &copy; 2019</p>
			</div>
		 </footer>
    </body>
</html>