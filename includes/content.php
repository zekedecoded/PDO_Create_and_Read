<?php
$Record->Add();
?>

<body>
    <div class="container mt-3">
        <h1 class="d-flex justify-content-center align-items-center fw-500">BIODATA</h1>
    </div>
    <div class="container fw-bolder">
        <form method="POST">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="ex. Juan Dela Cruz"
                        name="full_name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile No.</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputPassword3" name="mobile_no"
                        placeholder="09XXXXXXXXX">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email ID</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="email"
                        placeholder="sampleuser@email.com">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="addi" placeholder="ex. Cabiao">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputEmail3" name="date_of_birth">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select" name="gender">
                        <option selected="">...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Prefer to not say">Prefer not to say...</option>
                    </select>
                </div>
            </div>
            <!-- <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Gender :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="gender">
                </div>
            </div> -->
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Father's Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="father_name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Languages Known</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="language_known">
                </div>
            </div>
            <!-- <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Marital Status :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="marital_stats">
                </div>
            </div> -->
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Marital Status</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select" name="marital_stats">
                        <option selected="">...</option>
                        <option value="Male">Single</option>
                        <option value="Female">Married</option>
                        <option value="Widowed">Divorced</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Religion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="religion"
                        placeholder="ex. Catholic">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Hobbies</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="hobbies"
                        placeholder="ex. Playing">
                </div>
            </div>
            <button type="button" id="submitBtn" class="btn btn-primary" name="Add">Submit</button>
        </form>
    </div>
</body>