//Get Tasks
function getTasks(){
  let theRequest = new XMLHttpRequest();
  theRequest.open("GET", "http://localhost/task-app/get-tasks.php", true);
  theRequest.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let theData = JSON.parse(XMLHttpRequest.responseText)
      console.log(theData);
      let data = theData;
      let $tasks = document.querySelector('.task-list');
      for (let i = 0; i < data.length; i++) {
        $tasks.innerHTML += `<div class="task">${data[i].name}</div>`;
      }
    }
  }
  theRequest.send();
}

getTasks();
