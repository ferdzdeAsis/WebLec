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
        
	
		<div class = "center-justified">
			<div class="data-container">
				<div class="data-body">
					<div id="HTML" class="data-html">
						<h1><center>ANATOMY OF AN HTML ELEMENT</center></h1>
                        <br><br><br>
                        <center>
                        <img src="../images/anatomy2.jpg">
                        </center>
                        <br>
                        <br>
                        
                        1. <b>&lt;!DOCTYPE html&gt;</b> — the doctype. It is required preamble. In the mists of time, when HTML was young (around 1991/92), doctypes were meant to act as links to a set of rules that the HTML page had to follow to be considered good HTML, which could mean automatic error checking and other useful things. However these days, they don't do much, and are basically just needed to make sure your document behaves correctly. <br><br>
                        
                        2. <b>&lt;html&gt;&lt;/html&gt;</b> — the &lt;html&gt; element. This element wraps all the content on the entire page and is sometimes known as the root element.<br><br>
                        
                        3. <b>&lt;head&gt;&lt;/head&gt;</b> — the &lt;head&gt; element. This element acts as a container for all the stuff you want to include on the HTML page that isn't the content you are showing to your page's viewers. This includes things like keywords and a page description that you want to appear in search results, CSS to style our content, character set declarations and more.<br><br>

                        4. <b>&lt;meta charset="utf-8"&gt;</b> — This element sets the character set your document should use to UTF-8 which includes most characters from the vast majority of written languages. Essentially, it can now handle any textual content you might put on it. There is no reason not to set this and it can help avoid some problems later on.<br><br>
                        
                        5. <b>&lt;title&gt;&lt;/title&gt;</b> — the &lt;title&gt; element. This sets the title of your page, which is the title that appears in the browser tab the page is loaded in. It is also used to describe the page when you bookmark/favourite it. <br><br>
                        
                        6. <b>&lt;body&gt;&lt;/body&gt;</b> — the &lt;body&gt; element. This contains all the content that you want to show to web users when they visit your page, whether that's text, images, videos, games, playable audio tracks or whatever else
					</div>
            <br>
            <div>
            <center>
            <a href="html2.php" class="previous">&laquo; Previous</a>
            <a href="html4.php" class="next">Next &raquo;</a>
                </center>
            </div>
		</div>
            </div>
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