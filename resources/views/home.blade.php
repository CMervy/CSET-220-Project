<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Retirement Home</h1>
    </header>

    <main>
        <section>
            <h2>Account</h2>
            <ul>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
                <li><a href="/additional-info">Additional Information</a></li>
            </ul>
        </section>

        <section>
            <h2>Home Pages</h2>
            <ul>
                <li><a href="/patient-home">Patient's Home</a></li>
                <li><a href="/doctor-home">Doctor's Home</a></li>
                <li><a href="/caregiver-home">Caregiver's Home</a></li>
                <li><a href="/family-home">Family Member's Home</a></li>
            </ul>
        </section>

        <section>
            <h2>Doctors</h2>
            <ul>
                <li><a href="/appointments">Doctor's Appointments</a></li>
                <li><a href="/patient-of-doctor">Patient of Doctor</a></li>
            </ul>
        </section>

        <section>
            <h2>Admin</h2>
            <ul>
                <li><a href="/roles">Roles</a></li>
                <li><a href="/employees">Employees</a></li>
                <li><a href="/patients">Patients</a></li>
                <li><a href="/registration-approval">Registration Approval</a></li>
                <li><a href="/roster">Roster</a></li>
                <li><a href="/roster/new">New Roster</a></li>
                <li><a href="/admin-report">Admin's Report</a></li>
                <li><a href="/payment">Payment</a></li>
            </ul>
        </section>
    </main>
</body>
</html>