<html>
<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="../style/quiz.css">
  <link rel="stylesheet" type="text/css" href="../style/webstyle.css">
  <script>
    $(function() {
      $( "#datepicker" ).datepicker();
    });
  </script>
</head>
<ul class ="teacher_tools">
  <li><a href="../mainPage.php">Main</a></li>
  <li><a class="active" href="../teachertools/quizPage.php">Add Quizzes</a></li>
  <li><a href="../teachertools/gradebookPage.php">Quiz Gradebook</a></li>
  <li><a href="../teachertools/courseManagerPage.php"> Course Management</a></li>
  <li><a href="../aboutPage.php">About</a></li>
  <li><a href="../contactPage.php">Support</a></li>
</ul>
<div class="logout-button" align="right">
  <form method="POST" action="../php/logout.php">
    <button type="submit">Log Out</button>
  </form>
</div>
<div class="header-info" align="center">
  <h1>Add a Quiz</h1>
</div><br><br>
<div class="date-container" align="center">
  <label>Date</label>
  <input id="datepicker" class="quiz-date" type="text"></input><br><br>
</div>
<div class="add-quiz" align="center">
  <label>Quiz Name</label>
  <input class="quiz-name" type="text"></input><br><br><br><br>
  <div id="container">
  </div><br><br>
  <input class="myButton" id="add-q-button" type="button" name="add" value="+"></input><br><br><br>
  <input class="myButton" type="submit" name="back" onclick="window.location='../mainPage.php'" value="BACK"></input>
  <input class="myButton" type="button" name="submit" value="SUBMIT"></input>
</div>
<script type="text/javascript">
  $(document).on('click', '#add-q-button', function()
    {
      $("#container").append('<div class="question"><label>Question 1</label><input id="questionOne" class="quiz-questions" type="text"></input><br><br><label>a) </label><input id="optionAOne" class="quiz-options" type="text"></input><br><br><label>b)</label><input id="optionBOne" class="quiz-options" type="text"></input><br><br><label>c)</label><input id="optionCOne" class="quiz-options" type="text"></input><br><br><label>d)</label><input id="optionDOne" class="quiz-options" type="text"></input><br><br><label>Correct Answer</label><input id="correctAnswer" class="quiz-options" type="text"></input><br><br></div>');
    });
</script>
</html>
