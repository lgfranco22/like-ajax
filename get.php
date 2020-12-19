<!doctype html>

<script language="javascript">

var LIP_LowPrecision = true; //false = ask permission to the browser, higher precision | true = don't ask permission, lower precision

function LocalizaIP_done(ip_data){
	if (!ip_data['error']) //this line is an exemple, you must change it by your Geolocation manipulation code

		var cidade = ip_data['city'];
                var estado = ip_data['state'];
                var pais = ip_data['country'];
                var latitude = ip_data['latitude'];
                var longitude = ip_data['longitude'];
                var isp = ip_data['provider'];

                var ajax = new XMLHttpRequest();
                ajax.open("GET", "request.php?cidade="+cidade+"&estado="+estado+"&pais="+pais+"&longitude="+longitude+"&latitude="+latitude+"&isp="+isp);
                ajax.send();
                ajax.addEventListener("readystatechange", function(){
                        if(ajax.readyState == 4 && ajax.status == "200"){
                                console.log('As seguintes informações foram salvas no banco de dados...');
                        }
                });
}

</script>

<script src="https://www.localizaip.com/api/geolocation.js.php?domain=[seu-dominio]&token=[seu-token]"></script>
