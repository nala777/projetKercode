let menuGrand = document.getElementById("menu-grand").getElementsByTagName("a");
for(var i = 0;i<menuGrand.length;i++){
    if(menuGrand[i].href===location.href){
       menuGrand[0].classList.remove("active");
       menuGrand[i].classList.add("active");
        
    }
}

console.log(menuGrand);