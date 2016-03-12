<?php include 'php/sessionchecker.php' ?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style/webstyle.css">
</head>
<title>QA Teacher</title>
<h1 align="center">
  Teacher Tools
</h1>
<div class="logout" align="right">
  <form method="POST" action="php/logout.php">
    <button type="submit">Log Out</button>
  </form>
</div>
<div class="teacher_tool" align="left">
<ul class ="teacher_tools">
  <li><a class="active" href="mainPage.php">Main</a></li>
  <li><a href="../teachertools/quizPage.php">Add Quizzes</a></li>
  <li><a href="../teachertools/gradebookPage.php">Quiz Gradebook</a></li>
  <li><a href="../teachertools/courseManagerPage.php"> Course Management</a></li>
  <li><a href="../aboutPage.php">About</a></li>
  <li><a href="../contactPage.php">Support</a></li>
</ul>
</div>
<div class="current_quizzes" align="center">
  <h1>Your Quizzes</h1>
</div>
</html>
