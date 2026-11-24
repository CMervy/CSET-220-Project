<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Approval</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Retirement Home</h1>
    </header>

    <main>
        <section>
            <h2>Registration Approval</h2>
            <form method="POST" action="/registration-approval">
                @csrf
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Yes</th>
                            <th>No</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Patient</td>
                            <td><input type="radio" name="approvals[1]" value="yes"></td>
                            <td><input type="radio" name="approvals[1]" value="no"></td>
                        </tr>
                        <tr>
                            <td>Sarah Jones</td>
                            <td>Caregiver</td>
                            <td><input type="radio" name="approvals[2]" value="yes"></td>
                            <td><input type="radio" name="approvals[2]" value="no"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit">Submit</button>
            </form>
        </section>

        <p><a href="/">Back to Home</a></p>
    </main>
</body>
</html>