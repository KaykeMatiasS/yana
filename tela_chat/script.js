// atualização chat //
function ajax(){
    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if (req.readyState == 4 && req.status == 200) {
                document.getElementById('chat').innerHTML = req.responseText;
        }
    }
    req.open('GET', 'chat.php', true);
    req.send();
}

setInterval(function(){ajax();}, 1000);





// auto scroll //
window.setInterval(function() {
    var elem = document.getElementById('chat');
    elem.scrollTop = elem.scrollHeight;
  }, 1000);

