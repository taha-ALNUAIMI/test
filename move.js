function move(){
    x=document.getElementById('F1');
    alert(x.style.left);
    x.style.left=(x.style.left+100)+'px';
}
function start(){
    for(var i=0;i<10;i++){
    setTimeout(move,2000);
}}
start();
