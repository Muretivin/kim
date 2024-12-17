<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="bg-light">
<div class ="container" id="profile">
        
        <a href="logout.php" class="logout">Logout</a>

        <?php if (isset($error)) { ?>
            <div class="error-message">
                <p><?php echo htmlspecialchars($error); ?></p>
            </div>
        <?php } ?>

        

    </div>
	<div class="container mt-5">
    <h2 class="mb-4">Book Appointment</h2>
    <form id="appointmentForm" class="mb-4">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <input type="text" id="department" name="department" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="problem" class="form-label">Problem</label>
            <textarea id="problem" name="problem" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h3>Submitted Appointments</h3>
    <table class="table table-striped" id="appointmentTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Problem</th>
                <th>Datetime Submitted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>
</div>

<script>
$(document).ready(function () {
    loadData(); // Load existing data on page load

    // Handle form submission
    $('#appointmentForm').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: 'save_appointment.php', // URL to the updated PHP script
            type: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                const result = JSON.parse(response);

                if (result.status === 'success') {
                    // Clear the form
                    $('#appointmentForm')[0].reset();

                    // Dynamically append the new data to the table
                    const newAppointment = result.newAppointment;
                    const totalValue = (newAppointment.quantity_in_stock * newAppointment.price_per_item).toFixed(2);
                    $('#appointmentTable tbody').append(`
                        <tr>
                            <td>${newAppointment.name}</td>
                            <td>${newAppointment.department}</td>
                            <td>${newAppointment.problem}</td>
                            <td>${newAppointment.datetime}</td>
                            <td>
                                <button class="btn btn-sm btn-warning editBtn">Edit</button>
                                <button class="btn btn-sm btn-success saveBtn d-none">Save</button>
                                <button class="btn btn-sm btn-secondary cancelBtn d-none">Cancel</button>
                            </td>
                        </tr>
                    `);

                    // Recalculate and update the total sum
                    updateTotalSum();
                } else {
                    alert('Error: ' + result.message);
                }
            },
            error: function () {
                alert('Failed to submit the appointment. Please try again.');
            }
        });
    });

    // Load existing data into the table
    function loadData() {
        $.ajax({
            url: 'appointments.json', // Path to the JSON file
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                let tableRows = '';
                data.forEach(function (item) {
                    tableRows += `
                        <tr>
                            <td>${item.name}</td>
                            <td>${item.department}</td>
                            <td>${item.problem}</td>
                            <td>${item.datetime}</td>
                            <td>
                                <button class="btn btn-sm btn-warning editBtn">Edit</button>
                                <button class="btn btn-sm btn-success saveBtn d-none">Save</button>
                                <button class="btn btn-sm btn-secondary cancelBtn d-none">Cancel</button>
                            </td>
                        </tr>
                    `;
                });
                $('#appointmentTable tbody').html(tableRows);
                updateTotalSum();
            }
        });
    }

    // Update total sum of all appointments (if applicable)
    function updateTotalSum() {
        let totalSum = 0;
        $('#appointmentTable tbody tr').each(function () {
            const value = parseFloat($(this).find('td:nth-child(5)').text());
            if (!isNaN(value)) totalSum += value;
        });
        $('#totalSum').text(totalSum.toFixed(2));
    }
});

</script>


</body>
</html>
