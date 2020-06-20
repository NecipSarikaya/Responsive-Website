var artis = 1;
var resim ;
var timer =setInterval(function(){
   if(artis == 3){
       artis = 1;
       resim = artis + ".jpg";
       document.getElementById("img").getAttributeNode("src").value=resim;
   }else{
       artis++;
       resim = artis + ".jpg";
       document.getElementById("img").getAttributeNode("src").value=resim;
   }
},3000)

function solresim(){
    if(artis ==1){
        artis=3;
        resim = artis + ".jpg";
        document.getElementById("img").getAttributeNode("src").value=resim;
    }else{
        artis--;
        resim = artis + ".jpg";
        document.getElementById("img").getAttributeNode("src").value=resim;
    }
}
function sagresim(){
    if(artis == 3){
        artis = 1;
        resim = artis + ".jpg";
        document.getElementById("img").getAttributeNode("src").value=resim;
    }else{
        artis++;
        resim = artis + ".jpg";
        document.getElementById("img").getAttributeNode("src").value=resim;
    }
}