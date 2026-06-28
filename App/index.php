<?php
include("../Inc/top.php");
?>

<nav class="navbar navbar-light bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-white">Dynamic form <i class="fa-solid fa-house"></i></span>
    </div>
</nav>

<div class="container border sha mt-3">
    <p class="fs-5 pt-2 ps-2 fw-bold">Create New Form</p>
    <div class="container-form border p-3">
        <form action="../Controller/Form/Controller_form.php">
            <label class="form-label fw-bold ms-2">Form Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Form Name">
            <input type="submit" class="btn btn-primary mt-2 " value="Create Form">
        </form>
    </div>
    <div class="container-table border p-1">
        <p class="fs-5 py-3 ps-4 fw-bold">Form list</p>
        <table class="table">
            <thead>
                <tr>
                    <th class="table-primary">id</th>
                    <th class="table-primary">Form Name</th>
                    <th class="table-primary">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>
                        <a class="btn btn-success" href="Add.php" role="button">Add</a>
                        <a class="btn btn-warning" href="Update.php" role="button">Update</a>
                        <a class="btn btn-danger" href="Delete.php" role="button">Delete</a>
                        <a class="btn btn-primary" href="View.php" role="button">View</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
include("../Inc/botton.php");
?>