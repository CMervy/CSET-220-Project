<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Retirement Home</h1>
    </header>

    <main>
        <section>
            <h2>Register</h2>
            <form method="POST" action="/register">
                @csrf
                <label for="role">Role</label>
                <select id="role" name="role" required>
                    <option value="">Select a role</option>
                    <option value="patient">Patient</option>
                    <option value="family">Family</option>
                    <option value="caregiver">Caregiver</option>
                    <option value="supervisor">Supervisor</option>
                    <option value="admin">Admin</option>
                    <option value="doctor">Doctor</option>
                </select>

                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required>

                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="date_of_birth">Date of Birth</label>
                <input type="date" id="date_of_birth" name="date_of_birth" required>

                <label for="family_code">Family Code</label>
                <input type="text" id="family_code" name="family_code">

                <label for="emergency_contact_name">Emergency Contact Name</label>
                <input type="text" id="emergency_contact_name" name="emergency_contact_name">

                <label for="emergency_contact_phone">Emergency Contact Phone</label>
                <input type="tel" id="emergency_contact_phone" name="emergency_contact_phone">

                <label for="emergency_contact_relation">Relation to Emergency Contact</label>
                <input type="text" id="emergency_contact_relation" name="emergency_contact_relation">

                <button type="submit">Register</button>
            </form>
            <p><a href="/login">Already have an account? Log in</a></p>
            <p><a href="/">Back to Home</a></p>
        </section>
    </main>
</body>
</html>