

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<form action="{{ route('admin.submit') }}" method="POST" align="middle">
    @csrf
<h2>Welcome to admin Login Page!</h2>
    <input type="text" name="email" placeholder="Your E-mail" required>
    <br><br>
    <input type="password" name="password" placeholder="Your password" required>
    <br><br>
    <input type="submit" value="Login">
</form>
</body>
</html>



