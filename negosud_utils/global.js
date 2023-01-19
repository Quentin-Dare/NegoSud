window.onload=function(){
    loadMenuEvent()
};

function loadMenuEvent()
{
    var bouton = document.getElementById('logo_compte');
    var nav = document.getElementById('menu_mon_compte');
    bouton.onclick = function(e){
        if(nav.style.display=="block"){
            nav.style.display="none";
        }else{
            nav.style.display="block";
        }
    };

    console.log("Heyy")
}