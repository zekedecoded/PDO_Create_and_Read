<?php
$Record->Add();
?>

<body>
    <div class="container mt-2 mb-5 border border-1 p-5">
        <h2 class="fw-bold d-flex justify-content-center mb-5">BIODATA</h2>
        <div class="row align-items-center g-0 mb-3 mt-3">
            <div class="col-auto">
                <h5 class="pe-2"><b>PERSONAL DETAILS</b></h5>
            </div>
        </div>
        <div class=" container fw-bold">
            <!-- form -->
            <form method="POST" id="formq">
                <div class="row gy-3 pb-4">
                    <div class="col-12 col-md-6">
                        <label for="inputPassword3" class="mb-1">Name</label>
                        <input type="text" class="form-control" id="inputPassword3" name="full_name"
                            placeholder="ex. John Doe">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="inputPassword3" class="mb-1">Father's Name</label>
                        <input type="text" class="form-control" id="inputPassword3" name="father_name"
                            placeholder="ex. John Smith">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="inputPassword3" class="mb-1">Date of Birth</label>
                        <input type="date" class="form-control" id="inputPassword3" name="date_of_birth">
                    </div>
                    <div class="col-12 col-md-6 mt-3">
                        <label>Gender</label>
                        <div class="row row-cols-md-auto mt-2">
                            <div class="col">
                                <input type="radio" id="male" name="gender" value="Male">
                                <label for="male">Male</label>
                            </div>
                            <div class="col">
                                <input type="radio" id="female" name="gender" value="Female">
                                <label for="female">Female</label>
                            </div>
                            <div class="col">
                                <input type="radio" id="other" name="gender" value="Other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center g-0 mt-3 mb-3">
                    <div class="col-auto">
                        <h5 class="pe-2"><b>CONTACT INFORMATION</b></h5>
                    </div>
                </div>
                <!-- CONTACT FORM -->
                <div class="row gy-3">
                    <div class="col-12 col-md-6">
                        <label for="inputPassword3" class="mb-1">Mobile Number</label>
                        <input type="tel" class="form-control" id="inputPassword3" name="mobile_no"
                            placeholder="ex. 09123456789">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="inputPassword3" class="mb-1">Email ID</label>
                        <input type="email" class="form-control" id="inputPassword3" name="email"
                            placeholder="ex. sampleuser@email.com">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="inputPassword3" class="mb-1">Address</label>
                        <input type="text" class="form-control" id="inputPassword3" name="addi"
                            placeholder="ex. Cabiao, Nueva Ecija">
                    </div>
                </div>
                <!-- ADDITIONAL INFORMATION -->
                <div class="row align-items-center g-0 mt-3 mb-3">
                    <div class="col-auto">
                        <h5 class="pe-2"><b>ADDITONAL DETAILS</b></h5>
                    </div>
                </div>
                <div class="row gy-3">
                    <div class="col-12 col-md-6">
                        <label for="inputPassword3" class="mb-1">Marital Status</label>
                        <select class="form-select" aria-label="Default select" name="marital_stats">
                            <option selected="">...</option>
                            <option value="Male">Single</option>
                            <option value="Female">Married</option>
                            <option value="Widowed">Divorced</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="inputPassword3" class="mb-1">Language Known</label>
                        <input type="text" class="form-control" id="inputPassword3" name="language_known"
                            placeholder="ex. English">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="inputPassword3" class="mb-1">Religion</label>
                        <input type="text" class="form-control" id="inputPassword3" name="religion"
                            placeholder="Catholic">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="inputPassword3" class="mb-1">Hobbies</label>
                        <input type="text" class="form-control" id="inputPassword3" name="hobbies"
                            placeholder="ex. Coding">
                    </div>
                </div>
                <div class="container mt-3 d-flex justify-content-between">
                    <button type="reset" class="btn text-danger border border-danger" id="clearBtn">Clear
                        Form</button>
                    <button type="submit" class="btn btn-primary" name="Add">Submit Form</button>
                </div>
            </form>
        </div>
    </div>
</body>