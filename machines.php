<?php
include 'db.php';

$sql = "SELECT * FROM machine_details";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laboratory Machines</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
        }

        h1 {
            background: #123b66;
            color: white;
            text-align: center;
            padding: 30px;
            margin: 0;
        }

        .machine {
            background: white;
            width: 70%;
            margin: 25px auto;
            padding: 25px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 8px #aaa;
        }

        .machine h2 {
            color: #123b66;
        }

        .machine p {
            font-size: 16px;
        }


#search {
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

<h1>Laboratory Machines</h1>

<input type="text" id="search" placeholder="Search Machine">
<?php
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
?>

    <div class="machine">
        <h2><?php echo $row['machine_name']; ?></h2>

        <p>Machine ID: <?php echo $row['machine_id']; ?></p>

        <p>Model: <?php echo $row['model_name']; ?></p>

        <p>Installation Date: <?php echo $row['installation_date']; ?></p>

        <p>Imported From: <?php echo $row['imported_from']; ?></p>
    </div>

<?php
    }

} else {
    echo "<p style='text-align:center;'>No machines found.</p>";
}
?>
<script>
document.getElementById("search").addEventListener("keyup", function() {
    let searchText = this.value.toLowerCase();
    let machines = document.querySelectorAll(".machine");

    machines.forEach(function(machine) {
        if (machine.innerText.toLowerCase().includes(searchText)) {
            machine.style.display = "block";
        } else {
            machine.style.display = "none";
        }
    });
});
</script>
</body>
</html>