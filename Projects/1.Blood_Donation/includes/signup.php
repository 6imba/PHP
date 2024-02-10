<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#SignUpModal"> SignIn </a></button>




<!-- SignUpModal -->
<div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="SignUpModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SignUpModal">Get Member Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <?php
                if (isset($_POST["submitbtn"])) {

                    $name = $_POST["name"];
                    $blood_group = $_POST["blood_group"];
                    $district = $_POST["district"];
                    $address = $_POST["address"];
                    $age = $_POST["age"];
                    $gender = $_POST["gender"];
                    $last_donated = $_POST["last_donated"];
                    $contact = $_POST["contact"];
                    $detial = $_POST["detial"];

                    $sql = "INSERT INTO doner (name, bloodgroup, district,  address, age, gender, lastly_donated, contact, detial) values('$name' ,'$blood_group' ,'$district' ,'$address' ,'$age' ,'$gender' ,'$last_donated' ,'$contact' ,'$detial' );";
                    
                    $result = mysqli_query($conn, $sql);
                    if ($result) // check number of data/row in $result hold by $checkresult after query into database 
                    {
                        echo '<script>alert(" Inserted Sucessfully !");</script>';
                    } else {
                        echo "<br> Error while insertion !";
                    }
                }
                ?>

                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" type="name" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="blood_group" class="form-label">Blood Group : </label>
                        <select name="blood_group" id="blood_group">
                            <option value="A-" selected>A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="district" class="form-label">District : </label>
                        <input name="district" type="name" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address : </label>
                        <input name="address" type="name" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age : </label>
                        <input name="age" type="name" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender : </label>
                        <select name="gender" name="gender" id="gender">
                            <option value="">Male</option>
                            <option value="">Felame</option>
                            <option value="">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="last_donated" class="form-label">LastlDonateDate : </label>
                        <input name="last_donated" type="date" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact : </label>
                        <input name="contact" type="name" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="detial" class="form-label">Detial : </label>
                        <input name="detial" type="name" class="form-control" id="">
                    </div>
                    <button name="submitbtn" type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>