//1.5.3
var fs = require('fs');
var stream = fs.createReadStream('resource.json')
//当有新的数据块准备好时会激发data事件
stream.on('data', function(chunk){
	console.log(chunk)
})
//当所有数据块加载完之后 ,激发end事件
stream.on('end', function(){
    console.log('finished')	//完毕
	
})

