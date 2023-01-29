<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Exercise</title>
</head>

<body>
    <header>
        <h3>Register people</h3>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="register-page.php">New Register</a></li>   
            <li><a href="list-person.php">People List</a></li>     
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Register Success!";
            } else {
                echo "Register Failed!!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>