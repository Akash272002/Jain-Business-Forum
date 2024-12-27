<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>
    <h2>Submit User Data</h2>

   
    <?php echo form_open('user/save'); ?>

    <label for="name">Name</label>
    <input type="text" name="name" /><br />

    <label for="email">Email</label>
    <input type="text" name="email" /><br />

    <input type="submit" name="submit" value="Submit" />

    </form>
</body>
</html>
