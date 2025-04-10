<?php
// Include database connection
require_once 'connection.php';

// Fetch all feedback entries
$sql = "SELECT * FROM feedback ORDER BY submitted_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f8f9fa;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Feedback Summary</h2>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Faculty</th>
                <th>Subject</th>
                <th>Topics</th>
                <th>Delivery Method</th>
                <th>On Time</th>
                <th>Prepared</th>
                <th>English</th>
                <th>Clarity</th>
                <th>Real-World</th>
                <th>Lively</th>
                <th>Interaction</th>
                <th>Experience</th>
                <th>Submitted At</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['faculty']); ?></td>
                    <td><?php echo htmlspecialchars($row['subject']); ?></td>
                    <td><?php echo htmlspecialchars($row['topics']); ?></td>
                    <td><?php echo htmlspecialchars($row['delivery_method']); ?></td>
                    <td><?php echo $row['rating_ontime']; ?></td>
                    <td><?php echo $row['rating_prepared']; ?></td>
                    <td><?php echo $row['rating_english']; ?></td>
                    <td><?php echo $row['rating_clarity']; ?></td>
                    <td><?php echo $row['rating_realworld']; ?></td>
                    <td><?php echo $row['rating_lively']; ?></td>
                    <td><?php echo $row['rating_interaction']; ?></td>
                    <td><?php echo $row['rating_experience']; ?></td>
                    <td><?php echo $row['submitted_at']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No feedback found.</p>
    <?php endif; ?>

    <?php mysqli_close($conn); ?>
</body>
</html>
