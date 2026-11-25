<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient of Doctor</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Retirement Home</h1>
    </header>

    <main class="wide">
        <section>
            <h2>Patient: John Smith</h2>

            <details>
                <summary class="button">New Prescription</summary>
                <form method="POST" action="/patient-of-doctor">
                    @csrf
                    <label for="comment">Comment</label>
                    <textarea id="comment" name="comment" rows="3"></textarea>

                    <label for="morning_med">Morning Med</label>
                    <input type="text" id="morning_med" name="morning_med">

                    <label for="afternoon_med">Afternoon Med</label>
                    <input type="text" id="afternoon_med" name="afternoon_med">

                    <label for="night_med">Evening Med</label>
                    <input type="text" id="night_med" name="night_med">

                    <button type="submit">Save Prescription</button>
                </form>
            </details>
        </section>

        <section>
            <h2>Past Prescriptions</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Comment</th>
                        <th>Morning Med</th>
                        <th>Afternoon Med</th>
                        <th>Night Med</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2026-11-24</td>
                        <td>Blood pressure looks good</td>
                        <td>Lisinopril</td>
                        <td>Vitamin D</td>
                        <td>Melatonin</td>
                    </tr>
                    <tr>
                        <td>2026-11-23</td>
                        <td>Complained of headache</td>
                        <td>Lisinopril</td>
                        <td>Tylenol</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <p><a href="/">Back to Home</a></p>
    </main>
</body>
</html>