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
			
			<div class="data-http4">
				<div id="httpMessage" class="data-http-message">
					<h2>HTTP MESSAGE: REQUEST AND RESPONSE</h2>
                    
                    <br>
                    
            <div class="http4desc">
                    <p>
						HTTP message is a block of data that is sent by client to the server and vice versa. There are two kinds of HTTP message namely request and response message.
					</p>
                <br>
                    </div>
					<li>Response</li>
					<ul><br>
						It is the reply of the server to the client. The client will send a request message with the following format. The server will now then receive the message and interpret it and respond to it with the same message format.
					</ul><br>
					<li>Request</li>
					<ul><br>
						<ul>Messages that is sent by client to the server.</ul>
                        <ul>(CRLF –term line consisting of 3 space separated values)</ul>
						<ul>Method</ul>
						<ul>Request Target</ul>
						<ul>Protocol Version</ul>
					</ul><br>
				</div>
            </div>
         </div>
     </div>
        
        <br>
        
		<div>
            <center>
            <a href="http3.php" class="previous">&laquo; Previous</a>
            <a href="http5.php" class="next">Next &raquo;</a>
                </center>
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