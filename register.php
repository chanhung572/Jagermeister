<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Jägermeister Register</title>
        <link rel="stylesheet" href="style\register.css">
    </head>
    <body>
        <form action="process.php" method="POST">
            <h1>Sign up</h1>
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                        <b>Username:</b> 
                    </td>
                    <td>
                        <input type="text" name="txtUsername" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Password:</b>
                    </td>
                    <td>
                        <input type="password" name="txtPassword" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Fullname:</b>
                    </td>
                    <td>
                        <input type="text" name="txtFullname" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Phone:</b>
                    </td>
                    <td>
                        <input type="text" name="txtPhone" size="50" />
                    </td>
                </tr>
            </table>
            <div class="button-container">
                <input type="submit" value="Sign up" class="custom-btn" />
                <input type="reset" value="Reset" class="custom-btn" />
            </div>
        </form>
    </body>
</html>