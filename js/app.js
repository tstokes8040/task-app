$(function() {
  $.getJSON("http://localhost/task-app/app.php",
    function(data) {
      console.log(data);
    }
  );
});
