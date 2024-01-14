<!DOCTYPE html>
<html>
    <body>
        <h1>User form</h1>
        <form action="/userform" method="post" >
        <label for="email">Email</label>
        <input type="text" id="email" name="email" />
        <br>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" />
        <br>
        <label for="password">Password</label>
        <input type="text" id="password" name="password" />
        <br>
        <label for="password_confirm">Retype Your password </label>
        <input type="text" id="password_confirm" name="password_confirm" />
        <br>
        <label for="color">Favorite Color </label>
        <select id="color" name="color">
            @foreach (['red','green','blue'] as $color)
            <option value={{$color}}>{{$color}}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="send it!" />
</form>
    </body>
    </html>