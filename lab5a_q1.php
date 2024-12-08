<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: lightblue;
        }
        td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            text-align: left;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Variables containing the user details
    $name = "NABIHA AISHAH BINTI KAMARUZZAMAN";
    $matricNumber = "AI220110";
    $course = "Bachelor of Computer Science (Software Engineering)";
    $yearOfStudy = "Final Year/ YEAR 3";
    $address = "KAMPUNG BARU, JALAN BAKRI BATU 6, MUAR, JOHOR";
    ?>
    
    <table>
        <tr>
            <th>Details</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>

</body>
</html>
