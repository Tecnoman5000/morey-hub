<?php
  require 'conn.php';
  require 'logincheck.php';
  require 'template.php';

  if($loggedin){
	//content here
	head();
        echo'
            <div id="menu_content" style="display: none;">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="has-sub"><a href="#">Products</a>
                        <ul>
                            <li class="has-sub"><a href="#">Product 1</a>
                                <ul>
                                    <li><a href="#">Sub Item</a></li>
                                    <li><a href="#">Sub Item</a></li>   
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#">Product 2</a>
                                <ul>
                                    <li><a href="#">Sub Item</a></li>
                                    <li><a href="#">Sub Item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li> 
                </ul>
            </div>
            <script>logedin();</script>
            <div class="content">
                <td>
                    
                </td>
            </div>
        ';
        foot();

  } else {
	header('Location: login.php');
	//exit;
  }
