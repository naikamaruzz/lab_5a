<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Function to generate the multiplication table
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    // Call the function with a multiplier of 2 (example)
    $multiplier = 2;
    $tableData = multiplication($multiplier);
    ?>

    <table>
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
        // Display the multiplication table
        foreach ($tableData as $row) {
            echo "<tr>";
            echo "<td>{$row['no']}</td>";
            echo "<td>{$row['multiplier']}</td>";
            echo "<td>{$row['answer']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
