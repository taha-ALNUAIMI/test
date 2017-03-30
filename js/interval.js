
function start(){
    var pos=0;
    setInterval(move,5);
            function move(){
            x=document.getElementById('F1');
            if(pos<800){
            pos++;
            x.style.left=pos+'px';
            }}
}
start();
