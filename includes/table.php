<div class="table-responsive-xl">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile No.</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Gender</th>
                <th scope="col">Father's Name</th>
                <th scope="col">Language Known</th>
                <th scope="col">Marital Status</th>
                <th scope="col">Religion</th>
                <th scope="col">Hobbies</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row1) { ?>
                <tr>
                    <th scope="row">
                        <?= $row1['person_ID'] ?>
                    </th>
                    <td><?= $row1['full_name'] ?> </td>
                    <td><?= $row1['mobile_no'] ?> </td>
                    <td><?= $row1['email'] ?> </td>
                    <td><?= $row1['addi'] ?> </td>
                    <td><?= $row1['date_of_birth'] ?> </td>
                    <td><?= $row1['gender'] ?> </td>
                    <td><?= $row1['father_name'] ?> </td>
                    <td><?= $row1['language_known'] ?> </td>
                    <td><?= $row1['marital_stats'] ?> </td>
                    <td><?= $row1['religion'] ?> </td>
                    <td><?= $row1['hobbies'] ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>