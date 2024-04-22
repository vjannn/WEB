<?php

include("connection.php");

if (isset($_GET['error'])) {
    $error_message = $_GET['error'];
    echo "<script>alert('$error_message');</script>";
}

// Define an array of questions and their respective options
$questions = array(
    "What is the capital of France?" => array(
        "London", "Paris", "Berlin", "Rome"
    ),
    "Which planet is known as the Red Planet?" => array(
        "Venus", "Jupiter", "Mars", "Mercury"
    ),
    // Add more questions here
);

// Shuffle the questions
shuffle($questions);

// Define a variable to keep track of the question number
$question_number = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Create a Quiz App With Timer Using PHP</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAweome CDN Link for Icons -->
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <!-- start Quiz button -->
    <div class="start_btn"><button>Start Quiz</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules of this Quiz</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit Quiz</button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Awesome Quiz Application</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <?php echo key($questions); ?>
            </div>
            <div class="option_list">
                <?php foreach ($questions[key($questions)] as $option): ?>
                    <div class="option"><?php echo $option; ?></div>
                <?php endforeach; ?>
            </div>
        </section>

      
        <footer>
            <div class="total_que">
                <?php echo "Question " . ($question_number + 1) . " of " . count($questions); ?>
            </div>
            <button class="next_btn">Next Que</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Quiz!</div>
        <div class="score_text">
          
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit">Quit Quiz</button>
        </div>
    </div>


</body>
</html>