<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once "connection.php";

    // COLLECT AND SANITIZE USER INPUT
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    $name = htmlspecialchars($name, ENT_QUOTES, "UTF-8");
    $email = htmlspecialchars($email, ENT_QUOTES, "UTF-8");
    $message = htmlspecialchars($message, ENT_QUOTES, "UTF-8");

    // VALIDATE INPUT
    $errors = [];
    
    // VALIDATE NAME
    if (empty($name) ||strlen($name) < 2){
        $errors[] = "Name must be at least 2 characters long";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $name)){
        $errors[] = "Name may only contain letters and spaces.";
    }

    // VALIDATE EMAIL
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Invalid email address";
    }

    // VALIDATE MESSAGE
    if(empty($message)){
        $errors[] = "Message cannot be empty";
    }

    // IF THERE ARE VALIDATION ERRORS DISPLAY THEM
    if(!empty($errors)){
        foreach ($errors as $error){
            echo "<p style='color: red; '>$error</p>";
        }
    } else {
        try{
             // PREPARE SQL STATEMENT
            $stmt = $db_Connection->prepare("INSERT INTO users (name, email, message) VALUES (?, ?, ?)");

            // BIND PARAM
            $stmt->bindParam(1, $name, PDO::PARAM_STR);
            $stmt->bindParam(2, $email, PDO::PARAM_STR);
            $stmt->bindParam(3, $message, PDO::PARAM_STR);

            // EXECUTE THE STATEMENT
            $stmt->execute();
            echo "<script>
                alert('Message sent!');
                window.location.href = 'bytant.html';
            </script>";
            exit();
        } catch(PDOException $e){
            echo "
                <script>
                    alert('An error occured');
                    window.location.href = 'bytant.php';
                </script>
            ";
        }
       
        
    }
}
