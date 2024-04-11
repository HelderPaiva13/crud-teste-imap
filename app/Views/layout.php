<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Layout</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">CRUD Layout</h1>
    <div class="row">
      <!-- Create/Update Form -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-primary text-white">
            Create/Update Form
          </div>
          <div class="card-body">
            <!-- Form fields here -->
            <form id="crudForm">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address">
              </div>
              <!-- Add more fields as needed -->
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <!-- Data Table -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-success text-white">
            Data Table
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Address</th>
                  <!-- Add more headers as needed -->
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- Table rows with data -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Custom JS for CRUD operations -->
  <script>
    $(document).ready(function() {
      // Your CRUD operations JS code here
    });
  </script>
</body>

</html>