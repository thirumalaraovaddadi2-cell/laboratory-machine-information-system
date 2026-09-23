<?php
include'db.php';
$sql = "SELECT * FROM maintenance";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Machine Maintenance</title>

    <style>
        body {
            font-family: Arial;
            background: #f2f5f7;
            margin: 0;
        }

        header {
            background: #123b5d;
            color: white;
            text-align: center;
            padding: 25px;
        }

        .container {
            width: 90%;
            margin: 30px auto;
        }

        .card {
            background: white;
            margin-bottom: 25px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #aaa;
        }

        h2 {
            color: #155b82;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }

        th {
            background: #155b82;
            color: white;
        }

#searchMaintenance {
    display: block;
    width: 300px;
    padding: 12px;
    margin: 20px auto;
    font-size: 16px;
    border: 2px solid #123b66;
    border-radius: 8px;
}




    </style>
</head>

<body>

<header>
    <h1>Machine Maintenance</h1>
    <input type="text" id="searchMaintenance" placeholder="Search Machine or Maintenance">
    <p>Laboratory Machine Information System</p>
</header>

<div class="container">

<?php

$machineNames = [
    "CNCM001" => "CNC Milling Machine",
    "CNCD001" => "CNC Drilling Machine",
    "LAT001"  => "Lathe Machine",
    "MIL001"  => "Milling Machine",
    "DRL001"  => "Drilling Machine"
];

$maintenanceData = [];

while ($row = $result->fetch_assoc()) {
    $maintenanceData[$row['machine_id']][] = $row;
}

foreach ($maintenanceData as $machineId => $records) {

    $machineName = $machineNames[$machineId] ?? $machineId;
?>

    <div class="card maintenance-section">
        <h2><?php echo $machineName; ?></h2>

        <table>
            <tr>
                <th>Maintenance Date</th>
                <th>Work</th>
                <th>Technician</th>
                <th>Due Date</th>
            </tr>

            <?php foreach ($records as $row) { ?>

            <tr>
                <td><?php echo $row['maintenance_date']; ?></td>
                <td><?php echo $row['work']; ?></td>
                <td><?php echo $row['technician']; ?></td>
                <td><?php echo $row['due_date']; ?></td>
            </tr>

            <?php } ?>

        </table>
    </div>

<?php
}
?>

</div>
<script>
document.getElementById("searchMaintenance").addEventListener("keyup", function() {
    let searchText = this.value.toLowerCase();
    let sections = document.querySelectorAll(".maintenance-section");

    sections.forEach(function(section) {
        if (section.innerText.toLowerCase().includes(searchText)) {
            section.style.display = "block";
        } else {
            section.style.display = "none";
        }
    });
});
</script>
</body>
</html>