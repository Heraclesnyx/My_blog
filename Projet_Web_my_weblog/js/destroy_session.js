function destroy_session() {
  document.getElementbyId("disconnect_button").onclick = function() {
    // alert("coucou");
    var xmlhttp = getXmlHttp();
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open('GET','./destroy_session.php', true);
    xmlhttp.onreadystatechange=function(){
       if (xmlhttp.readyState == 4){
          if(xmlhttp.status == 200){
             alert(xmlhttp.responseText);
         }
       }
    };
    xmlhttp.send(null);
}