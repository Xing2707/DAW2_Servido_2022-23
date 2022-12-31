let captcha0=document.getElementById("captcha0");
let captcha1=document.getElementById("captcha1");
let captcha2=document.getElementById("captcha2");
let captcha3=document.getElementById("captcha3");

captcha0.style.color=getRandomColor();
captcha0.style.fontFamily=getRandomFont();
captcha0.style.transform=getRandomRotate();
captcha0.style.fontSize=getRandomSize();

captcha1.style.color=getRandomColor();
captcha1.style.fontFamily=getRandomFont();
captcha1.style.transform=getRandomRotate();
captcha1.style.fontSize=getRandomSize();

captcha2.style.color=getRandomColor();
captcha2.style.fontFamily=getRandomFont();
captcha2.style.transform=getRandomRotate();
captcha2.style.fontSize=getRandomSize();

captcha3.style.color=getRandomColor();
captcha3.style.fontFamily=getRandomFont();
captcha3.style.transform=getRandomRotate();
captcha3.style.fontSize=getRandomSize();

console.log(getRandomFont());

function getRandomColor(){
    let letters = '0123456789ABCDEF';
    let color ='#';
    for(i=0; i<6; i++){
        color +=letters[Math.floor(Math.random()*16)];
    }
    return color;
}

function getRandomFont(){
    let fonts=[
    "cursive",
    "Arial",
    "monospace",
    "'Rubik Spray Paint', cursive",
    "Arial, Helvetica, sans-serif",
    "'Secular One', sans-serif"
    ];

    return fonts[Number.parseInt(Math.random()*fonts.length)];
}

function getRandomRotate(){
    let longitud=90;
    return "rotate("+Number.parseInt(Math.random()*longitud)+"deg)";
}

function getRandomSize(){
    let size=20;
    return Number.parseInt(Math.random()*size+15)+"px";
}