$(document).ready(function() {
  $("#showFormBtn").click(function () {
    $('#showForm').append('<form>\
    <div class="form-group">\
        <label for="exampleFormControlSelect1">Date</label>\
        <select class="form-control" id="monthSelect">\
          <option>JAN</option>\
          <option>FEB</option>\
          <option>MAR</option>\
          <option>APR</option>\
          <option>MAY</option>\
          <option>JUN</option>\
          <option>JUL</option>\
          <option>AUG</option>\
          <option>SEP</option>\
          <option>OCT</option>\
          <option>NOV</option>\
          <option>DEC</option>\
        </select>\
        <select class="form-control" id="dateSelect">\
          <option>1</option>\
        </select>\
        <select class="form-control" id="daySelect">\
          <option>MON</option>\
          <option>TUE</option>\
          <option>WED</option>\
          <option>THU</option>\
          <option>FRI</option>\
          <option>SAT</option>\
          <option>SUN</option>\
        </select>\
      </div>\
    <div class="form-group">\
      <label>Venue</label>\
      <input class="form-control" id="venueName" placeholder="Venue">\
    </div>\
    <div class="form-group">\
      <label>City</label>\
      <input class="form-control" id="cityName" placeholder="City, State, Country">\
    </div>\
    <button type="submit" class="btn btn-primary" id="submitShowBtn">Submit</button>\
  </form>');
  for (i=2;i<=31;i++){
      $('#dateSelect').append($('<option></option>').val(i).html(i))};
  });
});

/*
$('#submitShowBtn').click(function() {
  $('ul#futureShows').append('<li>SEP 6 THU Hotel Vegas Austin, TX, United States <button type="button" class="btn btn-outline-dark">Tickets</button>\
      <hr>\
    </li>')
});
*/
/*
$('body').on('click', '#submitShowBtn', (function() {
  $('futureShows').append('<li>SEP 6 THU Hotel Vegas Austin, TX, United States <button type="button" class="btn btn-outline-dark">Tickets</button>\
      <hr>\
    </li>')
  });
);
*/
/*
$('#dateSelect').change(function(){
    for (i=2;i<=31;i++){
        $('#dateSelect').append($('<option></option>').val(i).html(i))
    }});
*/
/*
function addShow() {
  var li = document.createElement("li");
  var input = document.getElementById("add");
  li.innerHTML = input.value;
  input.value = "";
  document.getElementById("futureShows").appendChild(li);
}
*/

/*
function addShowForm() {
  var form = document.createElement('<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"> Well never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>');
  document.getElementById("showForm").appendChild(form);
}
*/

/*
var i = 1;
var list = document.getElementById("futureShows");
var add = document.getElementById("addShow");
add.addEventListener('click', function(){
  var itemsByTagName = document.getElementsByTagName("li");
  list.innerHTML += '<li>item ' + i++ + '</li>'
});
*/
