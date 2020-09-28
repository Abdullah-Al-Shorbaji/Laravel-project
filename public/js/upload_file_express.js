const   express =   require("express");
const   app     =   express();
const   http    =   require("http").Server(app).listen(8080);
const   upload  =   require("express-fileupload");

app.use(upload())

/*app.use(function (req, res, next) {
    console.log('Time:', Date.now())
    next()
  })*/
  
app.get("/", function(req, res){
    res.sendFile(__dirname + "/register.blade.php")
    }
)

app.post("/", function(req, res){
    if(req.files){
        var file = req.files.file,
            filename = file.name;
        file.mv("./public/images/personal_pic/" + filename, function(err){
            if(err) {
                console.log(err)
                res.send("Error occured!")
            }
            /*else {
                res.send("Done!")
            }*/
        })
    }
})