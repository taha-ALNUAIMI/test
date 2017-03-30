<?php
$db_host='localhost';
$db_name='blogs';
$db_user='root';
$db_pass='';
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
if ($mysqli->connect_error){
    printf("connect failed: %s\n" , $mysqli->connect_error);
}
?>
_____________________________________________________________
/* get data */
<?php 
    $query="SELECT * FROM ".$_GET['demand'];
    $display=$mysqli->query($query);
?>
/* html */
 <?php while($row = $display->fetch_assoc()): ?>
                    <tr>
                        <td class="no"><?php echo $row['no']; ?></td>
                        <td class="command"><?php echo $row['command']; ?></td>
                        <td class="explain"><?php echo $row['texta']; ?></td>
                    </tr>
 <?php endwhile; ?>
___________________________________________________
/* add data */
if (isset($_POST['submit'])){
    $no=$_POST['no'];
    $command=$_POST['command'];
    $texta=$_POST['texta'];
    $date= date("Y-m-d");
    $time=date('H:i:s');
    $query="INSERT INTO ".$_GET['demand']." (no, command, texta,date,time) VALUES ('$no','$command','$texta','$date','$time')";
    $insert=$mysqli->query($query);
}
/* html */
<form action="#" method="post">
                <input type="number" name="no" value =<?php echo $next; ?> /></br></br></br>
                <input type="text" name="command" /></br>
                <textarea name="texta" cols="70" rows="10"></textarea></br></br>  
              <input type="submit" name="submit" value="Add" />
            </form>

