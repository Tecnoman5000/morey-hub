<?php

  require 'template.php';
  require 'logincheck.php';
  //global $loggedin;
  
  if($loggedin){ //If someone is logged in, redirect them to the main page.
	header("Location: index.php");
  } else { //Otherwise if no one is logged in, display the login page
	head();
	echo'
            <script type="text/javascript">login_form();</script>
            <script type="text/javascript">
            $(window, document, undefined).ready(function() {
                $("input").blur(function() {
                  var $this = $(this);
                  if ($this.val())
                    $this.addClass("used");
                  else
                    $this.removeClass("used");
                });

                var $ripples = $(".ripples");

                $ripples.on("click.Ripples", function(e) {

                  var $this = $(this);
                  var $offset = $this.parent().offset();
                  var $circle = $this.find(".ripplesCircle");

                  var x = e.pageX - $offset.left;
                  var y = e.pageY - $offset.top;

                  $circle.css({
                    top: y + "px",
                    left: x + "px"
                  });

                  $this.addClass("is-active");

                });

                $ripples.on("animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd", function(e) {
                      $(this).removeClass("is-active");
                });

              });
            </script>
            <div class="login_form" align="center">
                <form name="login" action="logmein.php" method="post">
                    <div class="group">
                        <input type="text" name="user" placeholder="Username" required><span class="highlight"></span><span class="bar"></span>
                    </div>
                    <div class="group">
                        <input type="password" name="pass" placeholder="Password" required><span class="highlight"></span><span class="bar"></span>
                    </div>
                    <button type="submit" class="button buttonBlue">Login
                        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                    </button>
                </form>
            </div>
	';
	foot();
  }
