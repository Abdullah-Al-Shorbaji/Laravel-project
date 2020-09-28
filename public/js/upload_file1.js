const   http        =   require("http");
const   formidable  =   require("formidable");
const   fs          =   require("fs");
const   express     =   require("express"),
        app         =   express()/*,
        http        =   require("http").Server(app).listen(8080)*/;

http.createServer(function(req, res){
    res.write("!File uploaded and moved");
    if(req.url == "./views/register.blade.php"){
        form = new formidable.IncomingForm();
        form.parse(req, function(err, fields, files){
            var old_p = files.file.path;
            var new_p = "./public/images/personal_pic/" + files.file.name;
            fs.rename(old_p, new_p, function(err){
                if (err) throw err;
                res.write("File uploaded and moved");
                res.write(files.file.path);
                res.end();
            });
        });
    }
}).listen(8000);