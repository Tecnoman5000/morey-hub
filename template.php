<?php
	function head(){
	  //make a header and stuff in html here
        echo '
            <html>
                <head>
                        <title>Morey Hub!</title>
                        <link rel="shortcut icon" href="/logo.ico" >
                        <link rel="stylesheet" href="styles.css">
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                        <script type="text/javascript" src="script_functions.js"></script>
                </head>
                <body onload="init()">
                    <header>
                        <div id="header_content">
                            <table style="width:100%;padding-right:1%;">
                                <tr id="header_row">
                                    <td style="">
                                        <span>
                                            <h1> Morey Hub </h1>
                                        </span>
                                    </td>
                                    <td style="width:60px;padding-right:2%;">
                                        <span>
                                            <div id="clock" />
                                        </span>
                                    </td>
                                    <!-- <td id="logout_button"style="width:50px;">
                                        <span>
                                            <a href="logout.php" class="logout_button">Logout</a>
                                        </span>
                                    </td> -->
                                </tr>
                            </table
                        </div>
                    </header>
        ';
	}

	//this is where hypothetical content would go...

	function foot(){
	  //close tags and/or add a footer here
	  echo '
                    <footer>
                        <div id="footer_content">
                        </div>
                    </footer>
                </body>
            </html>
	  ';
	}