<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>

    @auth
<p>Congrats youre loggeed in</p>
<form action="/logout" method="POST">
@csrf
<button>log out</button>

</form>

<div style="border: 3px solid black;">
    <h2>Create new post</h2>
    <form action="create-post" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title">
        <textarea name="body" placeholder="body content...."></textarea>
        <button>Save Post</button>
    </form>
</div>

<div style="border: 3px solid black;">
    <h2> All post</h2>
    @foreach($posts as $post)
    @endforeach
    <div style="background-color: gray; padding: 10px; margin: 10px">
        <h3>{{$post['title']}}</h3>
        {{$post['body']}}
    </div>
</div>


    @else
    <div style="border: 3px solid black;">
        <h2> register </h2>
        <form action= "/register" method="POST" >
        @csrf
            <input name="name" type="text" placeholder="username">
            <input name="email" type="email" placeholder="enter your email">
            <input name="password" type="password" placeholder="enter your password">
            <button>Register</button>
        </form>
        </div>

        <div style="border: 3px solid black;">
            <h2> Login </h2>
            <form action= "/login" method="POST" >
            @csrf
                <input name="loginname" type="text" placeholder="username">
                <input name="loginpassword" type="password" placeholder="enter your password">
                <button>Login</button>
            </form>
            </div>
    @endauth
    
   
</body>
</html>