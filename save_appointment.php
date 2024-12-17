<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dataFile = 'appointments.json'; // File to store appointment data
    $data = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

    if (isset($_POST['action']) && $_POST['action'] === 'update') {
        // Handle updating an existing appointment
        $index = $_POST['index'];
        $updatedData = $_POST['updated_data'];

        // Update the appointment details
        $data[$index]['name'] = $updatedData['name'];
        $data[$index]['department'] = $updatedData['department'];
        $data[$index]['problem'] = $updatedData['problem'];

        // Save updated data back to the file
        file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));
        echo json_encode(['status' => 'success', 'message' => 'Appointment updated successfully.']);
    } else {
        // Handle adding a new appointment
        $newAppointment = [
            'name' => $_POST['name'],
            'department' => $_POST['department'],
            'problem' => $_POST['problem'],
            'datetime' => date('Y-m-d H:i:s') // Record the current datetime
        ];

        // Add new appointment to the list
        $data[] = $newAppointment;

        // Save updated data back to the file
        file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));

        // Return the newly added appointment as part of the response
        echo json_encode(['status' => 'success', 'message' => 'New appointment added successfully.', 'newAppointment' => $newAppointment]);
    }
}
?>
