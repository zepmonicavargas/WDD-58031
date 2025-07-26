<h1> home </h1>

<?php
if ($_SESSION['level'] == "2") {
    include("btn_add_thesis.php");
}
?>
<br>
<?php
include("db_connect.php");
$thesis = "SELECT * FROM thesis";
$thesis_result = mysqli_query($connector, $thesis);

if(mysqli_num_rows($thesis_result)>0){
	?>
    <div class = "div_list">
        <center>
            <table class="list_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Author</th>
                        <th>Location</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = mysqli_fetch_array($thesis_result)){
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['author']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                                <td>
                                    <?php
                                    include("btn_view_thesis.php");
                                    if ($_SESSION['level'] == "2") {
                                        include("admin_thesis_buttons.php");
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php
                    }
                    ?>
                </table>
            </center>
        </div>

<?php
}
else {
    echo "hehe";
}
?>

<?php
echo $page;
?>