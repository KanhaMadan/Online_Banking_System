<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank of Baroda</title>
</head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap" rel="stylesheet">

<style>
    /* CSS Reset */
    body {
        margin: 0px;
        padding: 0px;

        background-color: #f7c05a;
        width: 100%;
        height: 2000px;
        color: white;

        background: url('https://www.moneylife.in/media/uploads/article/responsive/BOB9621.jpg');
        background-size: contain;

        background-repeat: no-repeat;

        font-family: 'Baloo Bhai 2', cursive;
    }

    .header {
        margin-top: 0px;
        background-color: orange;
    }

    .left {
        display: inline-block;
        position: absolute;
        left: 30px;
        top: 30px;
        opacity: 100%;
    }

    .mid {
        display: block;
        width: 50%;
        margin: 30px auto;
        background-color: orange;
    }

    .right {
        display: inline-block;
        position: absolute;
        right: 25px;
        top: 55px;
        background-color: orange;
    }

    .navbar {
        display: inline-block;
    }

    .navbar li {
        display: inline-block;
        font-size: 25px;
    }

    .navbar li a {
        display: inline-block;
        color: white;

        text-decoration: none;

        padding: 20px 20px;
    }

    .navbar li a:hover,
    .navbar li a.active {
        text-decoration: underline;
        color: black;
    }

    .left img {
        width: 200px;
        height: 91px;
        border: 10px solid red;
    }

    .left:hover {
        opacity: 50%;
        transition: opacity 1s;
    }

    .btn {
        display: inline;
        margin: auto;
        text-align: center;
        align-items: center;
        background-color: white;
        color: black;
        padding: 0px 20px;
        border: 9px solid orangered;
        border-radius: 10px;
        font-size: 22px;
        cursor: pointer;
        font-family: 'Baloo Bhai 2', cursive;
    }

    .btn:hover {
        background-color: grey;
    }

    .container {
        display: block;
        padding: 60px 50px;
        width: 50%;
        margin: auto;
        border-radius: 10px;
        color: black;
    }

    .form {
        background-color: #f7c05a;
        color: black;
    }

    .form-group input {
        display: block;
        background-color: #f7c05a;
        font-size: 20px;
        text-align: center;
        /* width: 450px; */
        width: 100%;
        padding: 5px;
        border: 2px solid black;
        border-radius: 5px;
        margin: 10px 30px;
        color: black;
        font-family: 'Baloo Bhai 2', cursive;
    }

    .container button {
        display: flex;
        margin: 15px 119px 15px 337px;
        /* margin: auto; */
        align-items: center;
        background-color: red;
        /* width: 50%; */
        border: 15px ridge white;
        font-size: 30px;
        animation: blinkingBackground 5s infinite;
    }

    @keyframes blinkingBackground {
        0% {
            background-color: white;
        }

        25% {
            background-color: #f26522;
        }

        50% {
            background-color: white;
        }

        75% {
            background-color: #f26522;
        }

        100% {
            background-color: white;
        }
    }

    p {
        display: block;
        height: 200px;
        margin-top: 90px;
        text-align: center;
        font-size: 140px;
        font-family: 'Rubik Distressed', cursive;
    }

    .container h1 {
        display: block;
        text-align: center;
        font-size: 70px;
        color: white;

        margin: -25px 119px 15px 156px;
        /* animation: fadeIn 5s; */
        animation: animate 3s linear infinite;
    }

    @keyframes animate {
        0% {
            opacity: 0;
        }

        50% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }

    table,
    th,
    tr,
    td {
        border: 2px solid red;
        color: black;
    }

    table {
        width: 100%;
    }
</style>

<body>
    <header class="header">
        <div class="left">
            <img src="logo.png" alt="logo">
        </div>

        <div class="mid">
            <ul class="navbar">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">User_Customer</a></li>
                <li><a href="#">User_Employee</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="right">
            <button class="btn">Call Us</button>
            <button class="btn">Email ID</button>
        </div>
    </header>

    <p>BANK OF BARODA</p>
    <div class="container">
        <h1>Welcome to BOB World!!!</h1>
    </div>
    <h1>
        <center>
            <font color=orange size=100px>Search customer ID</font>
        </center>
    </h1>
    
        <form action="retrieve_cust.php" method="POST">
            <center>
                <input type="text" name="Acc_no" id="Acc_no" placeholder="Enter Account number" class="in">
                <input type="submit" name="search" id="search" value="Search" class="bt">
            </center>
        </form>
    
    <hr>

    <?php
    include "connect_bank.php";
    if (isset($_POST["search"])) {
        $Acc_no = $_POST["Acc_no"];
        $sqli = "select distinct customer.Cust_ID, customer.Cust_name, customer.Cust_address, customer.Cust_phoneno, customer.Cust_email, customer.Cust_type, Locker_no
        from customer, account, depositor
        where customer.Cust_ID = depositor.Cust_ID and depositor.Acc_no = account.Acc_no and account.Acc_no = '$Acc_no';";

        $result = $conn->query($sqli);
        if ($result->num_rows > 0) {
            echo "<table>
            <tr>
            <td>Cust_ID</td>
            <td>Cust_name</td>
            <td>Cust_address</td>
            <td>Cust_phoneno</td>
            <td>Cust_email</td>
            <td>Cust_type</td>
            <td>Locker_no</td>
            </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                            <td>" . $row["Cust_ID"] . "</td>" .
                    "<td>" . $row["Cust_name"] . "</td>" .
                    "<td>" . $row["Cust_address"] . "</td>" .
                    "<td>" . $row["Cust_phoneno"] . "</td>" .
                    "<td>" . $row["Cust_email"] . "</td>" .
                    "<td>" . $row["Cust_type"] . "</td>" .
                    "<td>" . $row["Locker_no"] . "</td>" .
                    "</tr>";
            }
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo $row["Cust_ID"];
            }
        } else {
            echo "0 results";
        }
    }

    $conn->close();
    ?>