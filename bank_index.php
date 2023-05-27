
    <?php
    // Database connection
    $conn = new mysqli('localhost', 'root', 'Ahan7614', 'bank');
    if ($conn->connect_error) {
        die("Connection Failed : " . $conn->connect_error);
    } else {
        $User_name = $_POST['User_name'];
        $Password = $_POST['Password'];

        $stmt = $conn->prepare("select * from login where User_name = ?");
        $stmt->bind_param("s", $User_name);
        $stmt->execute();

        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if ($data['Password'] === $Password) {
                echo "<h2>Login Successfully</h2>";
                header('Location: retrieve_cust.php');
                // header('Location: emp.php');
            } else {
                echo "<h2>Invalid Username or Password</h2>";
                header('Location: user.php');
            }
        }else{
            echo "<h2>Invalid Username or Password</h2>";
            header('Location: user.php');
        }

    }    
    ?>

</body>

</html>