<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @auth
        <p>Congrats you are logged in!!! </p>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
        <div style="border:3px solid black;">
            <h2>Create a New Post</h2>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="title">
                <textarea name="body" placeholder="body content........"></textarea>
                <button>Create Post</button>
            </form>
        </div>
    @else
        <div style="border:3px solid black;">
            <h2>Register</h2>
            <form action="/register" method="POST">
                @csrf
                <input name="name" type="text" placeholder="name">
                <input name="email" type="email" placeholder="email">
                <input name="password" type="password" placeholder="password">
                <button>Register</button>

            </form>
        </div>
        <div style="border:3px solid black;">
            <h2>Log In</h2>
            <form action="/login" method="POST">
                @csrf
                <input name="loginname" type="text" placeholder="name">

                <input name="loginpassword" type="password" placeholder="password">
                <button>Log In</button>

            </form>
        </div>
    @endauth



</body>

</html>
