var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollpos = window.pageYOffset;
    if(prevScrollpos > currentScrollpos) {
        document.getElementById("navbar").style.top= "0px";
    } else{
        document.getElementById("navbar").style.top= "-100px";
    }

    prevScrollpos= currentScrollpos;

}