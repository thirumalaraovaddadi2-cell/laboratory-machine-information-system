<?php
include 'db.php';

$sql = "SELECT * FROM spare_parts_CNC_MILLING";
$result = $conn->query($sql);




?>

<!DOCTYPE html>
<html>
<head>
    <title>Spare Parts</title>

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
            width: 95%;
            margin: 30px auto;
        }

        .card {
            background: white;
            margin-bottom: 25px;
            padding: 20px;
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
            padding: 10px;
            text-align: center;
        }

        th {
            background: #155b82;
            color: white;
        }
#searchParts {
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
    <h1>Laboratory Machine Spare Parts</h1>
    <p>Laboratory Machine Information System</p>
</header>
<input type="text" id="searchParts" placeholder="Search Spare Part">
<div class="container">
<?php
$sql_cnc_milling = "SELECT * FROM spare_parts_cnc_milling";
$result_cnc_milling = $conn->query($sql_cnc_milling);
?>
    <div class="card">
        <h2>CNC Milling Machine</h2>
        <table>
            <tr>
                <th>Part ID</th>
                <th>Part Name</th>
                <th>stock_quantity</th>
                <th>Cost</th>
                <th>Date of Import</th>
                <th>Imported From</th>
            </tr>

            <?php while ($row = $result_cnc_milling->fetch_assoc()) { ?>

<tr>
    <td><?php echo $row['part_id']; ?></td>
    <td><?php echo $row['part_name']; ?></td>
    <td><?php echo $row['stock_quantity']; ?></td>
    <td><?php echo $row['cost']; ?></td>
    <td><?php echo $row['date_of_import']; ?></td>
    <td><?php echo $row['imported_from']; ?></td>
</tr>

<?php } ?>
        </table>
    </div>
<?php
$sql_cnc_drilling = "SELECT * FROM spare_parts_cnc_drilling";
$result_cnc_drilling = $conn->query($sql_cnc_drilling);
?>
    <div class="card">
        <h2>CNC Drilling Machine</h2>
        <table>
<tr>
                <th>Part ID</th>
                <th>Part Name</th>
                <th>stock</th>
                <th>Cost</th>
                <th>Date of Import</th>
                <th>Imported From</th>
            </tr>
            <?php while ($row = $result_cnc_drilling->fetch_assoc()) { ?>

<tr>
    <td><?php echo $row['part_id']; ?></td>
    <td><?php echo $row['part_name']; ?></td>
    <td><?php echo $row['stock']; ?></td>
    <td><?php echo $row['cost']; ?></td>
    <td><?php echo $row['date_of_import']; ?></td>
    <td><?php echo $row['imported_from']; ?></td>
</tr>

<?php } ?>
        </table>
    </div>
<?php
$lathe_sql = "SELECT * FROM spare_parts_LATHE";
$lathe_result = $conn->query($lathe_sql);
?>
    <div class="card">
        <h2>Lathe Machine</h2>
        <table>
            <tr>
                <th>Part ID</th>
                <th>Part Name</th>
                <th>Stock</th>
                <th>Cost</th>
                <th>Date of Import</th>
                <th>Imported From</th>
                <?php while ($row = $lathe_result->fetch_assoc()) { ?>

<tr>
    <td><?php echo $row['part_id']; ?></td>
    <td><?php echo $row['part_name']; ?></td>
    <td><?php echo $row['stock']; ?></td>
    <td><?php echo $row['cost']; ?></td>
    <td><?php echo $row['date_of_import']; ?></td>
    <td><?php echo $row['imported_from']; ?></td>
</tr>

<?php } ?>
        </table>
    </div>

   <div class="card">
    <h2>Milling Machine</h2>

    <table>
        <tr>
            <th>Part ID</th>
            <th>Part Name</th>
            <th>Stock</th>
            <th>Cost</th>
            <th>Date of Import</th>
            <th>Imported From</th>
        </tr>

        <?php
        $sql_milling = "SELECT * FROM spare_parts_MILLING";
        $result_milling = $conn->query($sql_milling);

        while ($row = $result_milling->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['part_id']; ?></td>
                <td><?php echo $row['part_name']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><?php echo $row['cost']; ?></td>
                <td><?php echo $row['date_of_import']; ?></td>
                <td><?php echo $row['imported_from']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

  <div class="card">
    <h2>Drilling Machine</h2>

    <table>
        <tr>
            <th>Part ID</th>
            <th>Part Name</th>
            <th>Stock</th>
            <th>Cost</th>
            <th>Date of Import</th>
            <th>Imported From</th>
        </tr>

        <?php
        $sql_drilling = "SELECT * FROM spare_parts_DRILLING";
        $result_drilling = $conn->query($sql_drilling);

        while ($row = $result_drilling->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['part_id']; ?></td>
                <td><?php echo $row['part_name']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><?php echo $row['cost']; ?></td>
                <td><?php echo $row['date_of_import']; ?></td>
                <td><?php echo $row['imported_from']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

</div>
<script>
document.getElementById("searchParts").addEventListener("keyup", function() {
    let searchText = this.value.toLowerCase();
    let cards = document.querySelectorAll(".card");

    cards.forEach(function(card) {
        if (card.innerText.toLowerCase().includes(searchText)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});
</script>
</body>
</html>