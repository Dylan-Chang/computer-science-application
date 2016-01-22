var socketio = require('socket.io');
var io;
var guestNumber = 1;
var nickNames = {};
var namesUsed = [];
var currentRoom = {};


//启动Socket.IO服务器
exports.listen = function(server){
	io = socketio.listen(server);
	
	io.set('log level',1);
	
	io.sockets.on('connection',function(socket){
		guestNumber = assignGuestName(socket, guestNumber,
		nickNames, namesUsed);
		
		//在用户连接上来时把他放入聊天室Lobby里
		joinRoom(socket, '大厅');
		//处理用户的消息，更名，以及聊天室的创建和变更
		handleMessageBroadcasting(socket, nickNames);
		
		handleRoomJoining(socket);
		
		socket.on('rooms', function(){
			socket.emit('rooms', io.sockets.manager.rooms);
		});
		
		//用户断开连接后 清除
		handleClientDisconnection(socket, nickNames, namesUsed);
		
	});
	
};

//分配昵称
function assignGuestName(socket,guestNumber,nickNames,namesUsed){
	var name = '访客' + guestNumber;
	nickNames[socket.id] = name;
	socket.emit('nameResult',{
		success: true,
		name: name
	});
	namesUsed.push(name);
	return guestNumber + 1;
}

//进入聊天室
function joinRoom(socket, room){
	//用户进入
	socket.join(room);
    currentRoom[socket.id] = room;
	socket.emit('joinResult',{room: room});
	
	socket.broadcast.to(room).emit('message',{
		text: nickNames[socket.id] + ' has joined ' + room + '.'
	});
	
	var usersInRoom = io.sockets.clients(room);
	if(usersInRoom.length > 1){
		var usersInRoomSummary = '现在在 ' + room + ':';
		for(var index in usersInRoom){
			var userSocketId = usersInRoom[index].id;
			if(userSocketId != socket.id){
				if(index > 0){
					usersInRoomSummary += ', ';
				}
				usersInRoomSummary += nickNames[userSocketId];
			}
		}
		usersInRoomSummary += '.';
		socket.emit('message', {text: usersInRoomSummary});
	}
}

//昵称变更
function handleNameChangeAttempts(socket,nickNames,namesUsed){
	
}

//发送聊天消息
function handleMessageBroadcasting(socket){
	socket.on('message', function (message) {
		socket.broadcast.to(message.room).emit('message',{
			text: nickNames[socket.id] + ':' + message.text
		});
	});
}

//创建房间
function handleRoomJoining(socket){
	socket.on('join', function(room){
		socket.leave(currentRoom[socket.id]);
		joinRoom(socket, room.newRoom);
	});
}

//用户断开连接
function handleClientDisconnection(socket){
	socket.on('disconnect',function(){
		var nameIndex = namesUsed.indexOf(nickNames[socket.id]);
		delete namesUsed[nameIndex];
		delete nickNames[socket.id];
	});
}




