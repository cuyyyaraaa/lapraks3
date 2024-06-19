<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan untuk memeriksa apakah variabel ada dalam $_POST sebelum mengaksesnya
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $age = isset($_POST['number']) ? htmlspecialchars($_POST['number']) : '';
    $today = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : '';
    $mood = isset($_POST['radio']) ? htmlspecialchars($_POST['radio']) : '';
    $course = isset($_POST['course']) ? htmlspecialchars($_POST['course']) : '';
    $comments = isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : '';
    
    // Proses nilai dari checkbox (future)
    $future_list = '';
    if (isset($_POST['future']) && is_array($_POST['future'])) {
        $future_list = implode(", ", $_POST['future']);
    } elseif (isset($_POST['future'])) {
        $future_list = $_POST['future']; // Jika hanya satu checkbox yang dipilih
    }

    // Tampilkan hasil
    echo "<h2>Survey Result:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Today is:</strong> $today</p>";
    echo "<p><strong>How are you mood today:</strong> $mood</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Things that should be improved:</strong> $future_list</p>";
    echo "<p><strong>Comments:</strong><br> $comments</p>";
} else {
    echo "Form submission error.";
}
?>
