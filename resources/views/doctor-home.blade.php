<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Retirement Home</h1>
    </header>

    <main class="wide">
        <section>
            <h2>Patients</h2>
            <table>
                <thead>
                    <tr>
                        <th>Patient</th>
                        <th>Date</th>
                        <th>Comment</th>
                        <th>Morning Med</th>
                        <th>Afternoon Med</th>
                        <th>Night Med</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            John Smith
                            <a href="/patient-of-doctor?patient_id=1" class="button small">View</a>
                        </td>
                        <td>2026-11-24</td>
                        <td>Blood pressure looks good</td>
                        <td>Lisinopril <span class="given">Given</span></td>
                        <td>Vitamin D <span class="not-given">Not Given</span></td>
                        <td>Melatonin <span class="not-given">Not Given</span></td>
                    </tr>
                    <tr>
                        <td>
                            Ruth Miller
                            <a href="/patient-of-doctor?patient_id=2" class="button small">View</a>
                        </td>
                        <td>2026-11-24</td>
                        <td>Recovering well</td>
                        <td>Metformin <span class="given">Given</span></td>
                        <td>Metformin <span class="given">Given</span></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2>Upcoming Appointments</h2>
            <form method="GET" action="/doctor-home" class="search-form">
                <div>
                    <label for="till_date">Show Appointments Until</label>
                    <input type="date" id="till_date" name="till_date">
                </div>
                <button type="submit">Filter</button>
            </form>

            <table>
                <thead>
                    <tr>
                        <th>Patient</th>
                        <th>Appointment Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Smith</td>
                        <td>2026-12-01</td>
                    </tr>
                    <tr>
                        <td>Ruth Miller</td>
                        <td>2026-12-08</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <p><a href="/">Back to Home</a></p>
    </main>
</body>
</html>