<?php

$sql = "SELECT * FROM doner";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

?>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Blood Group</th>
                <th>Address</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Lastly_Donated</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <th scope="row"> <?php echo $row['name'] ?> </th>
                    <td> <?php echo $row['bloodgroup'] ?> </td>
                    <td> <?php echo $row['address'] ?> </td>
                    <td> <?php echo $row['age'] ?> </td>
                    <td> <?php echo $row['gender'] ?> </td>
                    <td> <?php echo $row['lastly_donated'] ?> </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

<?php
} else {
    echo "No results";
}

mysqli_close($conn);
?>