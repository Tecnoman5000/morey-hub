/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var menu_open = false;

function init(){
    startTime();
}

function startTime() {
    var today=new Date();
    hh = today.getHours();
    m = today.getMinutes();
    s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);  
    
    /*var ampm = (hh>=12)?'PM':'AM';
    hh = hh%12;
    hh = hh?hh:12;
    //hh = hh<10?'0'+hh:hh;
    min = min<10?'0'+min:min;
    s = s<10?'0'+s:s;*/
    
    if(hh > 12){
        newhour = hh - 12;
        ext = "PM";
    } else {
        newhour = hh;
        ext = "AM";
    }
    
    var time = newhour+":"+m+":"+s+"&nbsp;"+ext;
    document.getElementById('clock').innerHTML = '<h4>'+time+'</h4>';

    var t = setTimeout(function(){startTime();},500);
}

function checkTime(i) {
	if (i<10) {i = "0" + i;};  // add zero in front of numbers < 10
	return i;
}

function logedin(){
    logout_button();
    menu();
}

function logout_button(){
    var row = document.getElementById("header_row");
    var logout_button = row.insertCell(2);
    logout_button.style.width = "50px";
    logout_button.setAttribute("id", "logout_button");
    logout_button.innerHTML = '<span><a href="logout.php" class="logout_button"><h4>Logout</h4></a></span>';
}

function menu(){
    var row = document.getElementById("header_row");
    var menu = row.insertCell(0);
    menu.style.width = "25px";
    menu.style.padding = "1%";
    menu.setAttribute("id", "menu_button");
    menu.innerHTML = '<span id="triangle-right" onclick="menu_toggle()"/>';
}

function menu_toggle(){
    if (!menu_open){
        document.getElementById("menu_content").style.display = "float";
        menu_open = true;
        console.log("Menu Open");
    }else{
        document.getElementById("menu_content").style.display = "none";
        menu_open = false;
        console.log("Menu Closed");
    }
}

function login_form(){
    document.getElementsByTagName("head")[0].innerHTML += '<script type="text/javascript" src="login_form.js"></script><link rel="stylesheet" href="login_form.css">';
}