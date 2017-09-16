// var express = require('express');
// var app = express(); 
// var server = require('http').Server(app);
// var io = require('socket.io')(server);

// server.listen(3000);

// app.get('/', function(request, response){
//   // response.send('Hello World');
//   // console.log('A connection has been established!');
//   response.sendFile(__dirname + '/public/index.php');
// });

// io.on('connection', function(socket){
//   console.log('A connection has been established!');
// });

var express = require( 'express' );
var app = express();
var server = require( 'http' )
    .createServer( app );
var io = require( 'socket.io' )
    .listen( server );
users = [];
connections = [];
var socketCount = 0;
// Server start
server.listen( process.env.PORT || 3000 );
console.log( "Server started!" );
app.get( '/', function( req, res )
{
    res.sendFile( __dirname + '/public/index.php' ); 
} );
io.sockets.on( 'connection', function( socket )
{
    // On Connect
    connections.push( socket );
    socketCount++;
    console.log( 'Connected: %s sockets connected', connections.length );
    // On Disconnect
    socket.on( 'disconnect', function( data )
    {
        // if(!socket.username) return;
        users.splice( users.indexOf( socket.username ), 1 );
        updateUsernames();
        socketCount--;
        connections.splice( connections.indexOf( socket ), 1 );
        console.log( 'Disconnected: %s sockets connected', connections.length );
    } );
    // Send message
    socket.on( 'send message', function( data )
    {
        if ( data )
        {
            io.sockets.emit( 'new message'
            , {
                msg: data
                , user: socket.username
            } );
        }
        else
        {
            console.log( 'Nici un mesaj in text-field fmm' );
        }
    } );
    // New users
    socket.on( 'new user', function( data, callback )
    {
        if ( data )
        { 
            socket.username = data;
            users.push( socket.username );
            updateUsernames();
            console.log( "User loggin: " + socket.username);
        }
        else
        {
            console.log( 'username gol' );
        }
    } );

    function updateUsernames()
    {
        io.sockets.emit( 'get users', users );
        // console.log( "new user Function" );
 
    };
} );
// // // Setup basic express server
// // var express = require('express');
// // var app = express();
// // var path = require('path');
// // var server = require('http').createServer(app);
// // var io = require('../..')(server);
// // var port = process.env.PORT || 3000;

// // server.listen(port, function () {
// //   console.log('Server listening at port %d', port);
// // });

// // // Routing
// // app.use(express.static(path.join(__dirname, '/public/index.php')));

// // Chatroom

// // var numUsers = 0;

// io.on('connection', function (socket) {
//   // var addedUser = false;

//   // when the client emits 'new message', this listens and executes
//   // socket.on('new message', function (data) {
//   //   // we tell the client to execute 'new message'
//   //   socket.broadcast.emit('new message', {
//   //     username: socket.username,
//   //     message: data
//   //   });
//   // });

//   // // when the client emits 'add user', this listens and executes
//   // socket.on('add user', function (username) {
//   //   // if (addedUser) return;

//   //   // we store the username in the socket session for this client
//   //   socket.username = username;
//   //   ++numUsers;
//   //   addedUser = true;
//   //   socket.emit('login', {
//   //     numUsers: numUsers
//   //   });
//   //   // echo globally (all clients) that a person has connected
//   //   socket.broadcast.emit('user joined', {
//   //     username: socket.username,
//   //     numUsers: numUsers
//   //   });
//   // });

//   // when the client emits 'typing', we broadcast it to others
//   socket.on('typing', function () {
//     socket.broadcast.emit('typing', {
//       username: socket.username
//     });
//   });

//   // when the client emits 'stop typing', we broadcast it to others
//   socket.on('stop typing', function () {
//     socket.broadcast.emit('stop typing', {
//       username: socket.username
//     });
//   });

//   // when the user disconnects.. perform this
//   socket.on('disconnect', function () {
//     if (addedUser) {
//       --numUsers;

//       // echo globally that this client has left
//       socket.broadcast.emit('user left', {
//         username: socket.username,
//         numUsers: numUsers
//       });
//     }
//   });