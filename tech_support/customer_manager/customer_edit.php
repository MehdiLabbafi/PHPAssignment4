<?php include '../view/header.php'; ?>
<main>
    <h2>View/Update Customer</h2>
    <form action="." method="post">
        <input type="hidden" name="action" value="update_customer">
        <input type="hidden" name="customer_id" value="<?php echo htmlspecialchars($customer['customerID']); ?>">

        <label>First Name:</label>
        <input type="text" name="first_name" value="<?php echo htmlspecialchars($customer['firstName']); ?>">
        <?php if (isset($errors['first_name'])) : ?>
            <span class="error"><?php echo $errors['first_name']; ?></span>
        <?php endif; ?>
        <br><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" value="<?php echo htmlspecialchars($customer['lastName']); ?>">
        <?php if (isset($errors['last_name'])) : ?>
            <span class="error"><?php echo $errors['last_name']; ?></span>
        <?php endif; ?>
        <br><br>

        <label>Address:</label>
        <input type="text" name="address" value="<?php echo htmlspecialchars($customer['address']); ?>">
        <?php if (isset($errors['address'])) : ?>
            <span class="error"><?php echo $errors['address']; ?></span>
        <?php endif; ?>
        <br><br>

        <label>City:</label>
        <input type="text" name="city" value="<?php echo htmlspecialchars($customer['city']); ?>">
        <?php if (isset($errors['city'])) : ?>
            <span class="error"><?php echo $errors['city']; ?></span>
        <?php endif; ?>
        <br><br>

        <label>State:</label>
        <input type="text" name="state" value="<?php echo htmlspecialchars($customer['state']); ?>">
        <?php if (isset($errors['state'])) : ?>
            <span class="error"><?php echo $errors['state']; ?></span>
        <?php endif; ?>
        <br><br>

        <label>Postal Code:</label>
        <input type="text" name="postal_code" value="<?php echo htmlspecialchars($customer['postalCode']); ?>">
        <?php if (isset($errors['postal_code'])) : ?>
            <span class="error"><?php echo $errors['postal_code']; ?></span>
        <?php endif; ?>
        <br><br>

        <label>Country Code:</label>
        <input type="text" name="country_code" value="<?php echo htmlspecialchars($customer['countryCode']); ?>">
        <?php if (isset($errors['country_code'])) : ?>
            <span class="error"><?php echo $errors['country_code']; ?></span>
        <?php endif; ?>
        <br><br>

        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo htmlspecialchars($customer['phone']); ?>">
        <?php if (isset($errors['phone'])) : ?>
            <span class="error"><?php echo $errors['phone']; ?></span>
        <?php endif; ?>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($customer['email']); ?>">
        <?php if (isset($errors['email'])) : ?>
            <span class="error"><?php echo $errors['email']; ?></span>
        <?php endif; ?>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" value="<?php echo htmlspecialchars($customer['password']); ?>">
        <?php if (isset($errors['password'])) : ?>
            <span class="error"><?php echo $errors['password']; ?></span>
        <?php endif; ?>
        <br><br>

        <input type="submit" value="Update Customer">
    </form>

    <p>
        <a href=".?action=search_customers">Search Customers</a>
    </p>
    <p><a href="../index.php">Home</a></p>
</main>
<?php include '../view/footer.php'; ?>