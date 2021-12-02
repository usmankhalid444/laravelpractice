<h1>hello i am usman's first page and i am here</h1> <br><br>
<form action="/addData" method="post">
    @csrf
    <p>enter your email</p>
    <input type="email" name="email"><br><br>
    <p>enter your password</p>
    <input type="password" name="password"><br><br>
    <p>enter your number</p>
    <input type="text" name="number"><br><br>
    <button type="submit">submit info</button>
</form>