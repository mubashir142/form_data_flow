<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $topics = mysqli_real_escape_string($conn, $_POST['topics']);
    $delivery_method = mysqli_real_escape_string($conn, $_POST['delivery_method']);

    $rating_ontime = (int)$_POST['rating_ontime'];
    $rating_prepared = (int)$_POST['rating_prepared'];
    $rating_english = (int)$_POST['rating_english'];
    $rating_clarity = (int)$_POST['rating_clarity'];
    $rating_realworld = (int)$_POST['rating_realworld'];
    $rating_lively = (int)$_POST['rating_lively'];
    $rating_interaction = (int)$_POST['rating_interaction'];
    $rating_experience = (int)$_POST['rating_experience'];

    $submitted_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO feedback (
                name, faculty, subject, topics, delivery_method,
                rating_ontime, rating_prepared, rating_english, rating_clarity,
                rating_realworld, rating_lively, rating_interaction, rating_experience, submitted_at
            ) VALUES (
                '$name', '$faculty', '$subject', '$topics', '$delivery_method',
                $rating_ontime, $rating_prepared, $rating_english, $rating_clarity,
                $rating_realworld, $rating_lively, $rating_interaction, $rating_experience, '$submitted_at'
            )";

    if (mysqli_query($conn, $sql)) {
        // Show feedback immediately after insert
        $last_id = mysqli_insert_id($conn);
        $result = mysqli_query($conn, "SELECT * FROM feedback WHERE id = $last_id");
        $feedback = mysqli_fetch_assoc($result);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Thank You!</title>
            <style>
                body { font-family: Arial; padding: 20px; background: #f1f1f1; }
                .feedback-box {
                    background: white; padding: 20px; border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 600px; margin: auto;
                }
                h2 { color: green; }
                p { margin: 5px 0; }
            </style>
        </head>
        <body>
            <div class="feedback-box">
                <h2>✅ Feedback Submitted Successfully!</h2>
                <p><strong>Name:</strong> <?php echo htmlspecialchars($feedback['name']); ?></p>
                <p><strong>Faculty:</strong> <?php echo htmlspecialchars($feedback['faculty']); ?></p>
                <p><strong>Subject:</strong> <?php echo htmlspecialchars($feedback['subject']); ?></p>
                <p><strong>Topics:</strong> <?php echo htmlspecialchars($feedback['topics']); ?></p>
                <p><strong>Delivery Method:</strong> <?php echo htmlspecialchars($feedback['delivery_method']); ?></p>
                <p><strong>On Time:</strong> <?php echo $feedback['rating_ontime']; ?></p>
                <p><strong>Prepared:</strong> <?php echo $feedback['rating_prepared']; ?></p>
                <p><strong>English:</strong> <?php echo $feedback['rating_english']; ?></p>
                <p><strong>Clarity:</strong> <?php echo $feedback['rating_clarity']; ?></p>
                <p><strong>Real-World Relevance:</strong> <?php echo $feedback['rating_realworld']; ?></p>
                <p><strong>Lively:</strong> <?php echo $feedback['rating_lively']; ?></p>
                <p><strong>Interaction:</strong> <?php echo $feedback['rating_interaction']; ?></p>
                <p><strong>Experience:</strong> <?php echo $feedback['rating_experience']; ?></p>
                <p><strong>Submitted At:</strong> <?php echo $feedback['submitted_at']; ?></p>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "<script>
            alert('Error: " . mysqli_error($conn) . "');
            window.history.back();
        </script>";
    }

    mysqli_close($conn);
}
?>
