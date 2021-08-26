<?php 

include 'header.php';

?>

    <section>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full Name"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="text" name="username" placeholder="username"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <input type="password" name="repeatpwd" placeholder="Repeat Password"><br>
            <input type="Submit" placeholder="Submit">
        </form>
    </section>

<?php 
include 'footer.php';