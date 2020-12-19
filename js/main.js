setInterval(function(){

// get votos positivos
var ajax = new XMLHttpRequest();
ajax.open("GET", "votar.php?voto=gp");
ajax.send();
ajax.addEventListener("readystatechange", function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
                var btn1 = document.getElementById("likeye");
                var ajaxn = parseInt(ajax.response);
                btn1.innerHTML = ajaxn;
        }
});

// get votos negativos
var ajax2 = new XMLHttpRequest();
ajax2.open("GET", "votar.php?voto=gn");
ajax2.send();
ajax2.addEventListener("readystatechange", function () {
        if (ajax2.readyState == 4 && ajax2.status == 200) {
                var btn12 = document.getElementById("likeno");
                var ajaxn1 = parseInt(ajax2.response);
                btn12.innerHTML = ajaxn1;
        }
});

}, 1000);
// ------------------------------------------like---------------------------------------
var btn = document.getElementById("likebt");
var btnlikeye = document.getElementById("likeye");
btn.addEventListener("click", function () {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", "votar.php?voto=true");

        ajax.send();

        ajax.addEventListener("readystatechange", function () {

                if (ajax.readyState == 4 && ajax.status == 200) {
                        if(ajax.response != "votoON"){
                                console.log(ajax.response);
                                var vp = ajax.response;
                                var vpp = parseInt(vp);
                                btnlikeye.innerHTML = vpp;
                        }
                        else{
                                alert("Visitante ja votou");
                        }
                }

        });
        event.preventDefault();
});
// ------------------------------------------unlike---------------------------------------

var btn1 = document.getElementById("unlikebt");
btn1.addEventListener("click", function () {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", "votar.php?voto=false");

        ajax.send();

        ajax.addEventListener("readystatechange", function () {

                if (ajax.readyState == 4 && ajax.status == 200) {
                        var btnlikeno = document.getElementById("likeno");
                        if(ajax.response != "votoON"){
                                console.log(ajax.response);
                                var vp1 = ajax.response;
                                var vpp1 = parseInt(vp1);
                                btnlikeno.innerHTML = vpp1;
                        }
                        else{
                                alert("Visitante ja votou");
                        }

                }

        });
        event.preventDefault();
});
