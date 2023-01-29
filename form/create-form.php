<form action="register.php" method="POST"> 
    <fieldset>
        <p>
            <label for="firstName">First Name: </label>
            <input type="text" name="firstName" placeholder="First Name" />
        </p>
        <p>
            <label for="lastName">Last Name: </label>
            <input type="text" name="lastName" placeholder="Last Name" />
        </p>
        <p>
            <label for="address">Address: </label>
            <textarea name="address"></textarea>
        </p>
        <p>
            <label for="city">City: </label>
            <input type="text" name="city" placeholder="city" />
        </p>
        <p>
            <input type="submit" value="register" name="register" />
        </p>

        </fieldset>
</form>