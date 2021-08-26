<?php 
include 'header.php';
?>
    <section>
        <h1>Log in Form</h1>
        <form action="login.inc.php" method="post">
            <input type="text" placeholder="Username/email">
            <input type="password" name="pwd" id="">
            <input type="submit" placeholder="Log in">
        </form>
    </section>



<?php 
include 'footer.php';