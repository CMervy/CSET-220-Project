<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Retirement Home</h1>
    </header>

    <main>
        <section>
            <h2>Create Role</h2>
            <form method="POST" action="/roles">
                @csrf
                <label for="name">Role Name</label>
                <input type="text" id="name" name="name" required>

                <label for="access_level">Access Level</label>
                <select id="access_level" name="access_level" required>
                    <option value="">Select a level</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>

                <button type="submit">Create Role</button>
            </form>
        </section>

        <section>
            <h2>All Roles</h2>
            <table>
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Access Level</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Admin</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Supervisor</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Doctor</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <p><a href="/">Back to Home</a></p>
    </main>
</body>
</html>