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
			
			<div class="data-http">
					<div id="HTTP" class="data-hhtp3">
						<center><h1>Terms and Definitions</h1></center>
                        <br>
                            
                    <center>
					<table width="50%";>
                        <ul>
                        <tr>
							<td> <li><a href=#async>Asynchronous</a></li></td>
							<td> <li><a href=#Reassignment>Reassignment</a></li></td>
						</tr>
                            
                        <tr>
							<td> <li><a href=#Block>Block</a></li></td>
							<td> <li><a href=#Scope>Scope</a></li></td>
						</tr>
                            
                        <tr>
							<td><li><a href=#BlockScoping>Block Scoping</a></li></td>
							<td><li><a href=#Scoping>Scoping</a></li></td>
						</tr>
                            
                        <tr>
							<td><li><a href=#Callback>Callback</a></li></td>
							<td><li><a href=#Shim>Shim</a></li></td>
						</tr>
                            
                        <tr>
							<td><li><a href=#Declarative>Declarative</a></li></td>
							<td><li><a href=#Sideeffect>Side effect</a></li></td>
						</tr>
                            
                        <tr>
							<td><li><a href=#Fallback>Fallback</a></li></td>
							<td><li><a href=#State>State</a></li></td>
						</tr>
                            
                        <tr>
							<td><li><a href=#FunctionScoping>Function Scoping</a></li></td>
							<td><li><a href=#Stateful>Stateful</a></li></td>
						</tr>
                            
                        <tr>
							<td><li><a href=#Immutability>Immutability</a></li></td>
							<td><li><a href=#Stateless>Stateless</a></li></td>
						</tr>
                            
                        <tr>
							<td><li><a href=#LexicalScoping>Lexical Scoping</a></li></td>
							<td><li><a href=#Strictmode>Strict mode</a></li></td>
						</tr>
                            
                        <tr>
							<td><li><a href=#Polyfill>Polyfill</a></li></td>
							<td><li><a href=#TreeShaking>Tree Shaking</a></li></td>
						</tr>
                            
                        <tr>
							<td><li><a href=#Purefunction>Pure function</a></li></td>
						</tr>
                        </ul>
                        
                        </table>
                        </center>
                            
                        <br>
                        
                        <div id="async">
                        <h1><b>Asynchronous</b></h1>
                        <br>
Code is asynchronous when you initiate something, forget about it, and when the result is ready you get it back without having to wait for it. The typical example is an AJAX call, which might take even seconds and in the meantime you complete other stuff, and when the response is ready, the callback function gets called. Promises and async/await are the modern way to handle async.
                        </div>
                        <br>
                        
                        <div id="Block">
                        <h1><b>Block</b></h1>
                        <br>
                        In JavaScript a block is delimited curly braces ({}). An if statement contains a block, a for loop contains a block.
                        </div>
                        <br>
                        
                        <div id="BlockScoping">
                        <h1><b>Block Scoping</b></h1>
                        <br>
                        With Function Scoping, any variable defined in a block is visible and accessible from inside the whole block, but not outside of it.
                        </div>
                        <br>
                        
                        <div id="Callback">
                        <h1><b>Callback</b></h1>
                        <br>
                        A callback is a function that’s invoked when something happens. A click event associated to an element has a callback function that’s invoked when the user clicks the element. A fetch request has a callback that’s called when the resource is downloaded.
                        </div>
                        <br>
                        
                        <div id="Declarative">
                        <h1><b>Declarative</b></h1>
                        <br>
                        A declarative approach is when you tell the machine what you need to do, and you let it figure out the details. React is considered declarative, as you reason about abstractions rather than editing the DOM directly. Every high level programming language is more declarative than a low level programming language like Assembler. JavaScript is more declarative than C. HTML is declarative.
                        </div>
                        <br>
                        
                        <div id="Fallback">
                        <h1><b>Fallback</b></h1>
                        <br>
                        A fallback is used to provide a good experience when a user hasn’t access to a particular functionality. For example a user that browses with JavaScript disabled should be able to have a fallback to a plain HTML version of the page. Or for a browser that has not implemented an API, you should have a fallback to avoid completely breaking the experience of the user.
                        </div>
                        <br>
                        
                        <div id="FunctionScoping">
                        <h1><b>Function Scoping</b></h1>
                        <br>
                        With Function Scoping, any variable defined in a function is visible and accessible from inside the whole function.
                        </div>
                        <br>
                        
                        <div id="Immutability">
                        <h1><b>Immutability</b></h1>
                        <br>
                        A variable is immutable when its value cannot change after it’s created. A mutable variable can be changed. The same applies to objects and arrays.
                        </div>
                        <br>
                        
                        <div id="Lexical Scoping">
                        <h1><b>Lexical Scoping</b></h1>
                        <br>
                        Lexical Scoping is a particular kind of scoping which means that the value of a variable is defined by its position when it’s written. Not when it’s called, which is something that happens with the alternative, dynamic scoping (used in some other programming languages).
                        </div>
                        <br>
                        
                        <div id="Polyfill">
                        <h1><b>Polyfill</b></h1>
                        <br>
                        A polyfill is a way to provide new functionality available in modern JavaScript or a modern browser API to older browsers. A polyfill is a particular kind of shim.
                        </div>
                        <br>
                        
                        <div id="Purefunction">
                        <h1><b>Purefunction</b></h1>
                        <br>
                        A function that has no side effects (does not modify external resources), and its output is only determined by the arguments. You could call this function 1M times, and given the same set of arguments, the output will always be the same.
                        </div>
                        <br>
                        
                        <div id="Reassignment">
                        <h1><b>Reassignment</b></h1>
                        <br>
                        JavaScript with var and let declaration allows you to reassign a variable indefinitely. With const declarations you effectively declare an immutable value for strings, integers, booleans, and an object that cannot be reassigned (but you can still modify it through its methods).
                        </div>
                        <br>
                        
                        <div id="Scope">
                        <h1><b>Scope</b></h1>
                        <br>
                        Scope is the set of variables that’s visible to a part of the program.
                        </div>
                        <br>
                        
                        <div id="Scoping">
                        <h1><b>Scoping</b></h1>
                        <br>
                        Scoping is the set of rules that’s defined in a programming language to determine the value of a variable.
                        </div>
                        <br>
                        
                        <div id="Shim">
                        <h1><b>Shim</b></h1>
                        <br>
                        A shim is a little wrapper around a functionality, or API. It’s generally used to abstract something, pre-fill parameters or add a polyfill for browsers that do not support some functionality. You can consider it like a compatibility layer.
                        </div>
                        <br>
                        
                        <div id="Sideeffect">
                        <h1><b>Side effect</b></h1>
                        <br>
                        A side effect is when a function interacts with some other function or object outside it. Interaction with the network or the file system, or with the UI, are all side effects.
                        </div>
                        <br>
                        
                        <div id="State">
                        <h1><b>State</b></h1>
                        <br>
                        State usually comes into play when talking about Components. A component can be stateful if it manages its own data, or stateless if it doesn’t.
                        </div>
                        <br>
                        
                        <div id="Stateful">
                        <h1><b>Stateful</b></h1>
                        <br>
                        A stateful component, function or class manages its own state (data). It could store an array, a counter or anything else.
                        </div>
                        <br>
                        
                        <div id="Stateless">
                        <h1><b>Stateless</b></h1>
                        <br>
                        A stateless component, function or class is also called dumb because it’s incapable of having its own data to make decisions, so its output or presentation is entirely based on its arguments. This implies that pure functions are stateless. Note: in React, what we once called stateless components are now called function components because hooks give them the ability to use state.
                        </div>
                        <br>
                        
                        <div id="Strictmode">
                        <h1><b>Strictmode</b></h1>
                        <br>
                        Strict mode is an ECMAScript 5.1 new feature, which causes the JavaScript runtime to catch more errors, but it helps you improve the JavaScript code by denying undeclared variables and other things that might cause overlooked issues like duplicated object properties and other subtle things. Hint: use it. The alternative is “sloppy mode” which is not a good thing even looking at the name we gave it.
                        </div>
                        <br>
                        
                        <div id="TreeShaking">
                        <h1><b>Tree Shaking</b></h1>
                        <br>
                        Tree shaking means removing “dead code” from the bundle you ship to your users. If you add some code that you never use in your import statements, that’s not going to be sent to the users of your app, to reduce file size and loading time.
                        </div>
					   </div>
                    </div>
                </div>
            </div>
             
        <br>
            <center>
             <a href="javascript2.php" class="previous">&laquo; Previous</a>
             <a href="chapterPageJavascript.php" class="next">Next &raquo;</a>
                </center>
            
        
        <footer class="footer-site">
			<div class="footer-left">
				<p>Web Systems & Technologies &copy; 2019</p>
			</div>
		 </footer>

        <script src="js/bootstrap.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>