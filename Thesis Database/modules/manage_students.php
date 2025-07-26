<?php
include("db_connect.php");
$search = "SELECT * FROM users WHERE level_auth = '1'";
$search_result = mysqli_query($connector, $search);

if(mysqli_num_rows($search_result)>0){
	?>
    <div class = "div_list">
        <center>
            <table class="list_table">
                <thead>
                    <tr>
                        <th>Student Number</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = mysqli_fetch_array($search_result)){
                        ?>
                            <tr>
                                <td><?php echo $row['student_no']; ?></td>
                                <td><?php echo $row['f_name']; ?></td>
                                <td><?php echo $row['m_name']; ?></td>
                                <td><?php echo $row['l_name']; ?></td>
                                <td>
                                    <a href="./?page=edit&id=<?php echo $row['username']; ?>" class="btn btn-primary">Edit</a>
                                    <button type="button" class="btn btn-danger btndelete" id="rec_<?php echo $row['username']; ?>">Delete</button>
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