
const express = require('express')
const app = express()

app.use(express.static('estilo'))




/* inclusão do socket.io */
const http = require('http').Server(app)
const serverSocket = require('socket.io')(http)


const porta = process.env.PORT || 7000

const host = process.env.HEROKU_APP_NAME ? `https://${process.env.HEROKU_APP_NAME}.herokuapp.com` : "http://localhost"


/* Exibir Mensagem de validação do servidor funcionando */ 
http.listen(porta, function(){
    console.log('Servidor iniciado. Agora o navegador em http//localhost:'+ porta)
})



/* Puxando o conteudo da pagina HTML para o servidor */
app.get('/', function(req,resp){
    resp.sendFile(__dirname +'/index.html')
})



/* Recebimento das mensagens e o envio de volta para a tela */
serverSocket.on('connection',function(socket){

    
    socket.on('login', function(nickname) {
        console.log('Cliente conectado',  `${nickname}`)
        serverSocket.emit('chat msg', `Usuario ${nickname} conectado`)
        socket.nickname = nickname
    })
    
    


    socket.on('chat msg',function(msg){
        console.log(`Cliente: ${socket.nickname} mensagem: ${msg}`);
        serverSocket.emit('chat msg',`${socket.nickname}: ${msg}`)
        
        
    })

    socket.on('status',function (msg){
        socket.broadcast.emit('status',msg)
    })
})



