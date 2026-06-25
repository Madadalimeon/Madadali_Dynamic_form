<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Dynamic Form</title>
</head>

<body>
  <div class="container border mt-5">
    <div class="row">
      <div class="col">
        <h2 class="text-center text-primary my-3">Dynamic form</h2>
        <div class="card-body">
          <form action="./../Controller/form.php" method="post">
            <label for="" class="form-label">Form Name</label>
            <input class="form-control" type="text" name="Form_name" placeholder="Enter your Form Name">
            <input class="btn btn-primary mt-3  w-100" type="submit" value="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
  <table class="table w-75 offset-1 mt-5">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Form</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>login</td>
        <td>
          <a class="btn btn-primary" href="./Add.php" role="button">Add</a>
          <a class="btn btn-primary" href="./Update.php" role="button">Update</a>
          <a class="btn btn-primary" href="./Delete.php" role="button">Delete</a>
          <a class="btn btn-primary" href="./View.php" role="button">View</a>
        </td>
      </tr>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>