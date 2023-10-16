<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Manipulation</title>

    <!-- Add Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Class Manipulation</h1>

        <!-- Book Form -->
        <div class="card mt-4">
            <div class="card-body">
                <h2 class="card-title">Book</h2>
                <form method="post" action="manipulate_classes.php">
                    <div class="form-group">
                        <label for="isbn">ISBN:</label>
                        <input type="number" class="form-control" name="isbn" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" class="form-control" name="author" required>
                    </div>
                    <div class="form-group">
                        <label for="available">Available:</label>
                        <input type="number" class="form-control" name="available" required>
                    </div>
                    <input type="hidden" name="class" value="Book">
                    <button type="submit" class="btn btn-primary">Create Book</button>
                </form>
            </div>
        </div>

        <!-- Customer Form -->
        <div class="card mt-4">
            <div class="card-body">
                <h2 class="card-title">Customer</h2>
                <form method="post" action="manipulate_classes.php">
                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="number" class="form-control" name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" name="lastName" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <input type="hidden" name="class" value="Customer">
                    <button type="submit" class="btn btn-primary">Create Customer</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
