var http = require('http');

var fs = require('fs');
//文件系统路径相关的功能
var path = require('path');
//根据文件扩展名得出MIME类型 
var mime = require('mime');

var cache = {};

function send404(response){
	response.writeHead(404,{'Content-Type': 'text/plain'});
	response.write('Error 404: resource not found.');
	response.end();
}

function sendFile(response, filePath, fileContents){
	response.writeHead(
	 200,
	 {"content-type": mime.lookup(path.basename(filePath))}
	);
	response.end(fileContents);
}

//提供静态文件服务
function serveStatic(response, cache, absPath){
	if(cache[absPath]){
		sendFile(response, absPath, cache[absPath]);
	}else{
		fs.exists(absPath, function(exists){
			if(exists){
				fs.readFile(absPath, function(err, data){
					if(err){
						send404(response);
					}else{
						cache[absPath] = data;
						sendFile(response, absPath, data);
					}
					
				});
				
			}else{
				send404(response);
			}
		});
			
		
	}
}

//创建HTTP服务器
var server = http.createServer(function(request,response){
	var filePath = false;
	
	if(request.url == '/'){
        filePath = 'public/index.html';		
	}else{
	    filePath = 'public' + request.url;
	}
	var absPath = './' + filePath;
	serveStatic(response, cache, absPath);
	
});

//启动服务器
server.listen(3000, function(){
	console.log("Server listening on port 3000.");
});

//设置Socket.IO服务器
//加载定制的Node模块
var chatServer = require('./lib/chat_server');
//启动Socket.IO服务器
chatServer.listen(server);

