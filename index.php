<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
</head>
<body>
  <div class="logo"><h1>Taskly</h1></div>
  <div class="tasks">
    <h2>My Tasks</h2>
    <div class="task-list">
    </div>
  </div>
  <div class="add-tasks">
    <h2>Add Tasks</h2>
    <form action="/add-new-tasks.php" method="post">
      <label>Task Name:</label><br>
      <input type="text" name="name" value="Name">
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
