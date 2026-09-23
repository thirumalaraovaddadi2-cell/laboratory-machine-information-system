<!DOCTYPE html>
<html>
<head>
    <title>Laboratory Machine Information System</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }

        .header {
            background: #123b66;
            color: white;
            text-align: center;
            padding: 30px;
        }

        .welcome {
            background: white;
            margin: 40px auto;
            padding: 30px;
            width: 75%;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 8px #aaa;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 25px;
        }

        .card {
            background: white;
            width: 220px;
            padding: 25px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 8px #aaa;
        }

        .button {
            display: inline-block;
            background: #1683b8;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }

        .button:hover {
            background: #0d5f88;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>Laboratory Machine Information System</h1>
    <p>Mechanical Engineering Laboratory</p>
</div>

<div class="welcome">
    <h2>Welcome</h2>
    <p>Welcome to the Laboratory Machine Information System.</p>
    <p>This system provides information about laboratory machines, maintenance and spare parts.</p>
</div>

<div class="container">

    <div class="card">
        <h2>Machines</h2>
        <p>View laboratory machine information.</p>
        <a href="machines.php" class="button">View</a>
    </div>

    <div class="card">
        <h2>Maintenance</h2>
        <p>View machine maintenance details.</p>
        <a href="maintenance.php" class="button">View</a>
    </div>

    <div class="card">
        <h2>Spare Parts</h2>
        <p>View available spare parts.</p>
        <a href="spareparts.php" class="button">View</a>
    </div>

</div>

</body>
</html>