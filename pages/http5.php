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
        
	
    <div class = "center-justified">
			<div class="data-container">
			
			<div class="data-http5">
				<div id="mesStruc" class="data-http-message-structure">
                    <h2>HTTP MESSAGE STRUCTURE</h2>

					<center>
					<table border="black";>
						<tr>
							<th><h3>STANDARD METHODS</h3></th>
							<th><h3>METHOD PROPERTIES</h3></th>
                            <br>
						</tr>
						<tr>
							<td>Get - query</td>
							<td>safe / idempotent / cacheable</td>
						</tr>
						<tr>
							<td>Head - no body, metadata only</td>
							<td>safe / idempotent / cacheable</td>
						</tr>
						<tr>
							<td>Post - part of the body</td>
							<td>cacheable</td>
						</tr>
						<tr>
							<td>Put - requests that the enclosed entity be stored under supplied Request-URI</td>
							<td>idempotent</td>
						</tr>
						<tr>
							<td>Delete - not supported by servers</td>
							<td>idempotent</td>
						</tr>
						<tr>
							<td>Options - it allows the client to determine the options and requirements associated with the resource</td>
							<td>safe / idempotent</td>
						</tr>
						<tr>
							<td>Trace - used to invoke a remote loop-back of the request message</td>
							<td>safe / idempotent</td>
						</tr>
						<tr>
							<td>Connect - establish a tunnel/connection</td>
							<td> </td>
						</tr>
					</table>
					</center>
                    <br>
                    <br>
                    <ul>
                        <li><h4>Start-line</h4>  A single line that text that describes the request and determine if the request is successful or not.</li><br>
                        <li><h4>Headers</h4>  An area in which a message request that contains informaation about the body.</li><br>
                        <li><h4>Body</h4>  a.k.a PAYLOAD, Contains a block of data usually a text, html file, image, etc. either request from a client or response from a server.</li><br>
					</ul>
                    
					<h4>Safe Methods</h4>
						<ul>
							<li>Read - only</li><br>
						</ul>
					<h4>Idempotent Methods</h4>
						<ul>
							<li>Effects of multiple request is the same as a single request</li><br>
						</ul>
					<h4>Cacheable Methods</h4>
						<ul>
							<li>Allowed to store</li><br>
						</ul>
					</div>
		      </div>
            </div>
        </div>
	<br>
		<div>
            <center>
            <a href="http4.php" class="previous">&laquo; Previous</a>
            <a href="http6.php" class="next">Next &raquo;</a>
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