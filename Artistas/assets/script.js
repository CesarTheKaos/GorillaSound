//Ejecutar Menu

document.getElementById('btn_open').addEventListener("click", open_close_menu);


var side_menu = document.getElementById("menu");
var body = document.getElementById("body");
var logo = document.getElementById("logo");

    function open_close_menu(){
        body.classList.toggle("body_move");
        side_menu.classList.toggle("menu_move");
        logo.classList.toggle("img_logo");
    }

    if(window.innerWidth > 760){
        body.classList.add("body_move");
        side_menu.classList.add("menu_move");
        logo.classList.toggle("img_logo");
    }

window.addEventListener("resize", function(){

    if(window.innerWidth < 760){
        body.classList.remove("body");
        side_menu.classList.remove("menu_move");
        logo.classList.toggle("img_logo");
    }

});