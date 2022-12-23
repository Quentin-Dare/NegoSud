window.onload = function() {
    document.getElementById("logo_mon_compte").addEventListener("click", menu_deroulant_onclick);
};

function menu_deroulant_onclick() {
    if (document.getElementById("div_mon_compte").style.display == "none")
    {
        document.getElementById("div_mon_compte").style.display = "block";
    }
    else
    {
        document.getElementById("div_mon_compte").style.display = "none";
    }
}
