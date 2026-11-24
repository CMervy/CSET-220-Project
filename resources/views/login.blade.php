<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Retirement Home</h1>
    </header>

    <main>
        <section>
            <h2>Log In</h2>
            <form method="POST" action="/login">
                @csrf
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Log In</button>
            </form>
            <p><a href="/register">Don't have an account? Register</a></p>
            <p><a href="/">Back to Home</a></p>
        </section>
    </main>
</body>
</html>