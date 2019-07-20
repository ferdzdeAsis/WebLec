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
			
			<div class="data-http3">
				<div id="resourceAdd" class="data-http-resource">
					<h2>HTTP RESOURCE ADDRESSING</h2>
					<p>HTTP Resources are identified using URLs (RFC 3986) or more specifically, HTTP URLs</p>
					<ul>
                        <br>
                        
						<li><h4>Uniform Resource Locators(URL)</h4>
							<ul>
								<ul> Uniform Resource Locators (URL) is a type of URI. URL is a website address that identifies  the location of a website or a file. The URL contains the protocol to be use followed by the ip address and domain name.</ul>
							</ul></li><br>
						<li><h4>Scheme</h4>
							<ul>
								<ul> http or https</ul>
							</ul></li><br>
						<li><h4>Authority</h4>
							<ul>
								<ul> User information or authentication credentials(deprecated)</ul>
							</ul></li><br>
						<li><h4>Domain Name</h4>
							<ul>
								<ul> Resolve to an IP Address using DNS of the server where the resource resides or will be created</ul>
							</ul></li><br>
						<li><h4>Path to Resource</h4>
							<ul>
								<ul> Resolve relative to the document root on the server. It may also refer to a static or dynamic resource</ul>
							</ul></li><br>
						<li><h4>Query</h4>
							<ul>
								<ul> Typically provided as key-value pairs, with ampersand(&)separators between key/value pairs.</ul>
							</ul></li><br>
						<li><h4>Fragment Identifier</h4>
							<ul>
								<ul> Pound Sign (#)</ul>
							</ul></li>
					</ul>
				</div>
            </div>
        </div>
    </div>
        
        <br>
        
		<div>
            <center>
            <a href="http2.php" class="previous">&laquo; Previous</a>
            <a href="http4.php" class="next">Next &raquo;</a>
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