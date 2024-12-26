<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Opearation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div id="alert-container"></div>
    <div class="container mt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add User
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $(".submit").on("click", function(e) {
                e.preventDefault()
                var username = $('#username').val()
                var password = $('#password').val()

                $.ajax({
                    url: "AddUser/insert.php",
                    type: "POST",
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(data) {
                        if (data == "Success") {
                            $('#alert-container').html(`<div class="alert alert-success" role="alert">User added sucessfully</div>`)
                        } else {
                            $('#alert-container').html(`<div class="alert alert-danger" role="alert">User not added</div>`)
                        }
                        $('#exampleModal').modal('hide')
                        $('#alert-container').hide(3000)
                    }
                })
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>