<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/static/vendor/fontawesome-free/css/all.min.css">
    <!-- Optional: Include Bootstrap JS if you want to use Bootstrap's JavaScript features -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .registration-form {
            max-width: 400px;
            margin: auto;
            margin-top: 10px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 10px;
            color: #007bff;
        }

        .form-group label {
            color: #495057;
        }

        .btn-submit {
            background-color: #007bff;
            color: #fff;
        }

        /* Adjust the height of the textarea to match input fields */
        .form-group textarea {
            height: 38px;
        }
    </style>
</head>
<body>

    <div class="container">
        <form class="registration-form bg-light p-4 rounded" action="" method="post">
            <h2 class="form-header">Registration Page</h2>

            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
            </div>

            <div class="form-group">
                <label for="businessName">Business Name:</label>
                <input type="text" class="form-control" id="businessName" name="businessName" required>
            </div>

            <!-- Added textarea with matching height -->
            <div class="form-group">
                <label for="additionalInfo">Address:</label>
                <textarea class="form-control" id="additionalInfo" name="address" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
            </div>

            <button type="submit" class="btn btn-submit btn-block" name="submit_btn">Submit</button>
        </form>
    </div>

</body>
</html>
