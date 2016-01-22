
//简单的异步程序
var fs = require('fs');
fs.readFile('resource.json',function(er,data){
   console.log(data);
});
