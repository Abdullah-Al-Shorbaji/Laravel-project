const   express =   require("express");
const   app     =   express.Router();
const   multer  =   require("multer");
const     upload  =   multer({dest: "public/images/personal_pic/"});


const storage   =   multer.diskStorage({
    destination: function(req, file, cb){
        cb("./public/images/personal_pic");
    },
    flename: function(req, file, cb){
        cb(null, new Date().toISOStirng() + file.originalname);
    }
});

const fileFilter = (req, file, cb) =>{
    if(file.mimetype === "image/jpg" || file.mimetype === "image/png"){
        cb(null, true);
    }
    else {
        cb(null, false);
    }
};

upload = multer({
    storage: storage,
    limits: {
        fileSize: 1024 * 1024 * 5
    },
    fileFilter: fileFilter
});

app.post("/", upload.single("productImage"), function(req, res, next){
    console.log(req.file);
    }
)