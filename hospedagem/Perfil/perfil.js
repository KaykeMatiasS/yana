var userimage=document.querySelector("#userimage");
var overlay=document.querySelector(".overlay");
var cross=document.querySelector(".overlay .fa-close");
var plus=document.querySelector(".fa-plus");

plus.addEventListener('click',function(){
plus.classList.toggle('plusred');
});

userimage.addEventListener('click',function(){
overlay.classList.remove('d-none');
});


cross.addEventListener('click',function(){
overlay.classList.add('d-none');
});
