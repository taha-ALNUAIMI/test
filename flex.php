<!DOCTYPE html>
<html>
<head>
<style> 
#main {
    width: 400px;
    height: 400px;
    border: 1px solid #c3c3c3;
    display: flex;
    /*flex-direction:row;*/
}

#main div {
    /*width: 50px;
    height: 50px;*/
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 40px;
}
#main div:nth-of-type(2){
    flex-basis: 80px;
}
</style>
</head>
<body>
<div id="main">
  <div style="background-color:coral;">A</div>
  <div style="background-color:lightblue;">B</div>
  <div style="background-color:khaki;">C</div>
  <div style="background-color:pink;">D</div>
  <div style="background-color:lightgrey;">E</div>
  <div style="background-color:lightgreen;">F</div>
</div>
</body>
</html>
