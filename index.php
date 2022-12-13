<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Admission Form</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function CompletePayment()
        {
            alert("Admission Successful, Now you can make payment.");

        }
    </script>
</head>

<body>
    <div class="header">
        <h1>Yoga Admission Form</h1>
    </div>

    <div class="content">
        <div class="form-container">
            <h3>Registration Form</h3>
            <!-- Form -->
            <form action="#" method="POST" name="registerForm"  onsubmit="return CompletePayment()">
                Email: <input type="email" id="email" required placeholder="Enter your email" name="email">
                Name: <input type="text" required placeholder="Enter your name" name="name">
                Age: <input type="number" min="18" max="65" required placeholder="Enter your age" name="age">
                Class Time:<select id="inputTime" class="form-control" required name="timing">
                    <option selected>Choose...</option>
                    <option value="6 am to 7 am">6 am to 7 am</option>
                    <option value="7 am to 8 am">7 am to 8 am</option>
                    <option value="8 am to 9 am">8 am to 9 am</option>
                    <option value="5 pm to 6 pm">5 pm to 6 pm</option>
                </select>
                Fee:
                <input disabled placeholder="₹ 500 Monthly">
                <input type="submit" id="sub-btn" value="Complete Your Admission" name="submit-btn">
            </form>
            <!-- Form End -->
            <button class="pay-btn"><a href="https://rzp.io/l/EraPJs4lj"> Payment Now</a></button>
            <h5> Note: Pay only after Registration</h5>
        </div>
    </div>
</body>

</html>

<!-- Establishing connection  -->
<?php include 'conn.php'; ?>