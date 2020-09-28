const   http        =   require("http");
const   formidable  =   require("formidable");
const   fs          =   require("fs");
const   express     =   require("express"),
        app         =   express();

        $(function(){
            alert("With name of Allah");
        })
/*
http.createServer(function(req, res){
    res.write("!!!File uploaded and moved");
   if(req.url == "/register.blade.php"){
        form = new formidable.IncomingForm();
        form.parse(req, function(err, fields, files){
            var old_p = files.file.path;
            var new_p = "C:/Users/abdul/AppData/Roaming/Composer/vendor/bin/sampleapp/public/images/personal_pic" + files.file.name;
            fs.rename(old_p, new_p, function(err){
                if (err) throw err;
                res.write("File uploaded and moved");
                res.write(files.file.path);
                res.end();
            });
        });
    }
    else {
        res.writeHead(200, {"Content-type": "text/html"});
        res.write('<input type="file" id="file" name="file" value="Add personal photo" onchange="display_image(this)"></div>');
        res.write('<div id="for-gaping-border">Inner</div>');
        res.write('<input type="submit" maxlength="100" width="100px" id="register-submitting" name="register-submitting"></input>');
        return res.end();
    }
}).listen(8000);*/