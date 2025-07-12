<!DOCTYPE html>
<html>
<head>
    <title>Greeting Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function greetUser() {
            const name = document.getElementById("name").value;
            if(name.trim() !== "") {
                alert("Hello "+ name + "!, From JS");
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Enter Your Name</h2>
        <form method="POST" action="">
            <input type="text" name="username" id="name" placeholder="Your name" required>
            <br><br>
            <button type="submit" onclick="greetUser()">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["username"]);
            echo "<p>Hello, <strong>$name</strong>! (From PHP)</p>";
        }
        ?>
    </div>
</body>
</html>

