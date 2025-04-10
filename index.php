<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px;
        }
        select, input[type="text"] {
            width: 100%;
            padding: 5px;
        }
        .submit-btn {
            text-align: center;
            margin-top: 20px;
        }
        .rating-info {
            font-size: 14px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PAF-IAST</h1>
        <h2>Department of Information Technology</h2>
        
        <form action="save.php" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <table>
                <tr>
                    <th>No.</th>
                    <th>FeedBack Form</th>
                    <th>Rating</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>The faculty is</td>
                    <td>
                        <select name="faculty" required>
                            <option value="">Select</option>
                            <option value="S Kamalesh">pafiast</option>
                            <!-- Add other faculty options as needed -->
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Select the subject name</td>
                    <td>
                        <select name="subject" required>
                            <option value="">Select</option>
                            <option value="CG">CG</option>
                            <!-- Add other subject options as needed -->
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Please enter the topics covered</td>
                    <td>
                        <input type="text" name="topics" required>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Select the Content Delivery Method</td>
                    <td>
                        <select name="delivery_method" required>
                            <option value="">Select</option>
                            <option value="Presentation">Presentation</option>
                            <!-- Add other delivery methods as needed -->
                        </select>
                    </td>
                </tr>
            </table>
            
            <div class="rating-info">
                For the following questions enter the rating value (Rating factor: Excellent = 3, Good = 2, Poor = 1)
            </div>
            
            <table>
                <tr>
                    <td>5</td>
                    <td>On-time to class</td>
                    <td>
                        <select name="rating_ontime" required>
                            <option value="">Select</option>
                            <option value="3">3 - Excellent</option>
                            <option value="2">2 - Good</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Well prepared for the class</td>
                    <td>
                        <select name="rating_prepared" required>
                            <option value="">Select</option>
                            <option value="3">3 - Excellent</option>
                            <option value="2">2 - Good</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Communicates only in English</td>
                    <td>
                        <select name="rating_english" required>
                            <option value="">Select</option>
                            <option value="3">3 - Excellent</option>
                            <option value="2">2 - Good</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Explains the topics clearly</td>
                    <td>
                        <select name="rating_clarity" required>
                            <option value="">Select</option>
                            <option value="3">3 - Excellent</option>
                            <option value="2">2 - Good</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Integrate the topics with real-world applications</td>
                    <td>
                        <select name="rating_realworld" required>
                            <option value="">Select</option>
                            <option value="3">3 - Excellent</option>
                            <option value="2">2 - Good</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Makes the classroom very lively and interesting</td>
                    <td>
                        <select name="rating_lively" required>
                            <option value="">Select</option>
                            <option value="3">3 - Excellent</option>
                            <option value="2">2 - Good</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Interaction with the students</td>
                    <td>
                        <select name="rating_interaction" required>
                            <option value="">Select</option>
                            <option value="3">3 - Excellent</option>
                            <option value="2">2 - Good</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Your experience with the content delivery method</td>
                    <td>
                        <select name="rating_experience" required>
                            <option value="">Select</option>
                            <option value="3">3 - Excellent</option>
                            <option value="2">2 - Good</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </td>
                </tr>
            </table>
            
            <div class="submit-btn">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>