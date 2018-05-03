<?php
$mysqli = new mysqli('localhost','root','root','wbs');
$page = isset($_GET['p'])? $_GET['p'] : '';
if($page == 'del'){
    $myid = $_POST['id'];
    $id = str_replace(' ', ',', $myid);
    $result = $mysqli->query("UPDATE reservation SET status ='borrowed' where reservation_id in($id)");
    if($result){
        echo "Success";
    } else{
        echo "Error";
    }
} else{ 
    $hasil = $mysqli->query("select * from tabledata");
    while($row = $hasil->fetch_assoc()){
        ?>
<tr>
    <td class="text-center"><input type="checkbox" class="checkitem" value="<?php echo $row['id'] ?>"/></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['tgl'] ?></td>
</tr>
        <?php
    }
}
?>