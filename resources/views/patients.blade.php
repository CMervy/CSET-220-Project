<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Retirement Home</h1>
    </header>

    <main class="wide">
        <section>
            <h2>Search Patients</h2>
            <form method="GET" action="/patients" class="search-form">
                <div>
                    <label for="patient_id">Patient ID</label>
                    <input type="number" id="patient_id" name="patient_id">
                </div>
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name">
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name">
                </div>
                <div>
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age">
                </div>
                <div>
                    <label for="emergency_contact_phone">Emergency Contact</label>
                    <input type="tel" id="emergency_contact_phone" name="emergency_contact_phone">
                </div>
                <div>
                    <label for="emergency_contact_name">Emergency Contact Name</label>
                    <input type="text" id="emergency_contact_name" name="emergency_contact_name">
                </div>
                <div>
                    <label for="admission_date">Admission Date</label>
                    <input type="date" id="admission_date" name="admission_date">
                </div>
                <button type="submit">Search</button>
            </form>
        </section>

        <section>
            <h2>All Patients</h2>
            <table>
                <thead>
                    <tr>
                        <th>Patient ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Emergency Contact</th>
                        <th>Emergency Contact Name</th>
                        <th>Admission Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John</td>
                        <td>Smith</td>
                        <td>82</td>
                        <td>717-555-0101</td>
                        <td>Mary Smith</td>
                        <td>2026-01-15</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ruth</td>
                        <td>Miller</td>
                        <td>77</td>
                        <td>717-555-0144</td>
                        <td>Tom Miller</td>
                        <td>2026-03-02</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <p><a href="/">Back to Home</a></p>
    </main>
</body>
</html>