<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert into the table</title>
    <style>
        body{
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 90px;
        }
        h1{
            text-align: center;
        }
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 13px;
            background-color: rgb(134, 134, 134);
        }
        form{
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        input{
            padding: 10px;
            border: 1px solid rgb(58, 56, 56);
            border-radius: 6px;
        }
        label{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 500;
        }
        select{
            padding: 10px;
            border-radius: 5px;
            display: flex;
            text-align: center;
        }
        button{
            width: 90px;
            padding: 10px;
            border-radius: 5px;
            background-color: black;
            color: white;
        }
        .btn{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add the vehicle Data</h1>
        <form method="POST" action="../vehicles/cvehicle.php">
            <label for="model">Model:</label>
            <input type="text" name="model" id="model">
            <label>Date of Release:</label>
            <input type="date" name="date_of_release" required>
            <label>Status:</label>
            <select name="vehicle_status">
                <option value="Active">Active</option>
                <option value="In Repair">In Repair</option>
                <option value="Inactive">Inactive</option>
            </select>
            <div class="btn">
                 <button type="submit">Add Vehicle</button>
            </div>
        </form>

    </div>
</body>
</html>