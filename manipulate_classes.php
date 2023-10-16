<?php
include 'Book.php';
include 'Customer.php';

$createdBook = null;
$createdCustomer = null;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["class"])) {
    $class = $_POST["class"];
    if ($class === "Book") {
        $isbn = $_POST["isbn"];
        $title = $_POST["title"];
        $author = $_POST["author"];
        $available = $_POST["available"];

        $book = new Book($isbn, $title, $author, $available);
        $createdBook = $book;
    } elseif ($class === "Customer") {
        $id = $_POST["id"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];

        $customer = new Customer($id, $firstName, $lastName, $email);
        $createdCustomer = $customer;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Manipulation Example</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .custom-card {
            border: 2px solid #007BFF;
            border-radius: 10px;
        }

        .custom-table {
            width: 100%;
        }
        
        .custom-table th {
            background-color: #007BFF;
            color: white;
        }

        .text-highlight {
            color: #007BFF;
            font-weight: bold;
        }

        /* Adjust for larger screens */
        @media (min-width: 1200px) {
            .custom-container {
                max-width: 1200px;
            }

            .custom-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5 custom-container">
        <!-- <h1 class="text-center mb-4">Class Manipulation Example</h1> -->

        <div class="row">
            <div class="col-lg-6">
                <?php if ($createdBook) : ?>
                    <div class="card custom-card mb-4">
                        <div class="card-body">
                            <h2 class="card-title">Created Book</h2>
                            <table class="table custom-table">
                                <tr>
                                    <th>Property</th>
                                    <th>Value</th>
                                </tr>
                                <tr>
                                    <td>ISBN</td>
                                    <td class="text-highlight"><?= $createdBook->getIsbn() ?></td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td><?= $createdBook->getTitle() ?></td>
                                </tr>
                                <tr>
                                    <td>Author</td>
                                    <td><?= $createdBook->getAuthor() ?></td>
                                </tr>
                                <tr>
                                    <td>Available</td>
                                    <td><?= $createdBook->getAvailable() ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-lg-6">
                <?php if ($createdCustomer) : ?>
                    <div class="card custom-card">
                        <div class="card-body">
                            <h2 class="card-title">Created Customer</h2>
                            <table class="table custom-table">
                                <tr>
                                    <th>Property</th>
                                    <th>Value</th>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td class="text-highlight"><?= $createdCustomer->getId() ?></td>
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td><?= $createdCustomer->getFirstName() ?></td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td><?= $createdCustomer->getLastName() ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?= $createdCustomer->getEmail() ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
</body>
</html>



