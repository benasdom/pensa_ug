function logout(){
    let div=document.createElement("div");
     div.innerHTML="<div class='errorbox'><div class='popmessage' ><i class='fa fa-info-circle'></i> &nbsp Notice :&nbsp<a href='register.php'></a>&nbsp Logged out successully 👋</div></div>";
    document.querySelector("body").appendChild(div);
    document.querySelector("#logout").style.cssText="visibility:hidden";
}
 