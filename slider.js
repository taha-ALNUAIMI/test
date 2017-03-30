function xxx(t){
    if(t==='left'){
        document.getElementById('F1').style.display="none"
    }else{
        document.getElementById('F2').style.display="none"
    }
}
function move(){
    x=document.getElementById('F1');
    x.style.left=(x.style.left+10)+'px';
    setTimeout(move,20);
}

