<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Retirement Home</h1>
    </header>

    <main>
        <section>
            <h2>Find Patient</h2>
            <form method="GET" action="/payment" class="search-form">
                <div>
                    <label for="patient_id">Patient ID</label>
                    <input type="number" id="patient_id" name="patient_id" required>
                </div>
                <button type="submit">Look Up</button>
            </form>
        </section>

        <section>
            <h2>Amount Due</h2>
            <p><strong>Patient ID:</strong> 1</p>
            <table>
                <thead>
                    <tr>
                        <th>Charge</th>
                        <th>Rate</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Days Stayed</td>
                        <td>$10 / day</td>
                        <td>30</td>
                        <td>$300.00</td>
                    </tr>
                    <tr>
                        <td>Appointments</td>
                        <td>$50 / appointment</td>
                        <td>2</td>
                        <td>$100.00</td>
                    </tr>
                    <tr>
                        <td>Medications</td>
                        <td>$5 / med / month</td>
                        <td>3</td>
                        <td>$15.00</td>
                    </tr>
                    <tr>
                        <td colspan="3">Payments Made</td>
                        <td>-$200.00</td>
                    </tr>
                    <tr class="total-row">
                        <td colspan="3">Total Due</td>
                        <td>$215.00</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2>Make a Payment</h2>
            <form method="POST" action="/payment">
                @csrf
                <input type="hidden" name="patient_id" value="1">

                <label for="amount">Payment Amount</label>
                <input type="number" id="amount" name="amount" step="0.01" min="0.01" required>

                <button type="submit">Make Payment</button>
            </form>
        </section>

        <p><a href="/">Back to Home</a></p>
    </main>
</body>
</html>