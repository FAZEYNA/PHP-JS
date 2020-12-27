nom = document.getElementById("nom");
prenom = document.getElementById("prenom");
dateNaiss = document.getElementById("dateNaiss");
valider = document.getElementById("valider");
infos = document.getElementById("infos");
modifications = document.getElementById("modifications");
police = document.getElementById("police");
taille = document.getElementById("taille");
bgColor = document.getElementById("bgColor");
textColor = document.getElementById("textColor");

infos.style.borderRadius = "17px";

bgColor.addEventListener("change", function(){
    infos.style.backgroundColor = this.value;

    if (infos.style.color == infos.style.backgroundColor)
    {
        alert("La couleur de fond et celle du texte doivent être différentes !");
        infos.style.backgroundColor = "";
    }
});

textColor.addEventListener("change", function(){
    infos.style.color = this.value;

    if (infos.style.color == infos.style.backgroundColor)
    {
        alert("La couleur de fond et celle du texte doivent être différentes !");
        infos.style.backgroundColor = "";
    }
});

police.addEventListener("blur", function(){
    infos.style.fontFamily = this.value;
});

taille.addEventListener("blur", function(){
    infos.style.fontSize = this.value+"px";
});

/*valider.addEventListener("click",(e)=>{ CA NE MARCHE PAS CA DISPARAIT AUSSITOT !
    e.preventDefault();
   modifications.removeAttribute("hidden");
   infos.removeAttribute("hidden");  
});*/

/*const verify = (string) =>{
    if(string.match(/[0-9]/) || string.length<2 || string == "") 
    {
        return true ;
    }  
    else
    {
        return false;
    }
}*/
