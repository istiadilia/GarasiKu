<form action="/login" method="post">
    @csrf
    <h2>Login</h2>
    <p>Email</p>
    <input type="email" name="email" id="email" placeholder="Enter Email">
    <p>Password</p>
    <input type="password" name="password" id="password" placeholder="Enter Password">
    <input type="submit" name="login" value="Login">
</form>