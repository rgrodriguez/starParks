/* $(document).ready(function() {
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
*/

$('#showBtn').one('click', function() {
  $('#showBtn').append('<br><table>\
    <tbody>\
      <tr>\
        <td>SEP 14 FRI</td>\
        <td>Triple Crown Whiskey Bar and Raccoon Motel</td>\
        <td>Davenport, IA</td>\
        <td><a href="https://www.bandsintown.com/e/100283109?app_id=squarespace-starparks&came_from=267&utm_medium=api&utm_source=public_api&utm_campaign=event&mkt_source=www.starparksmusic.com" class="button">Get Tickets</a>\
        </td>\
      </tr>\
      <tr>\
        <td>SEP 15 SAT</td>\
        <td>The Observatory</td>\
        <td>Chicago, IL</td>\
        <td><a href="https://www.bandsintown.com/e/100283119?app_id=squarespace-starparks&came_from=267&utm_medium=api&utm_source=public_api&utm_campaign=event&mkt_source=www.starparksmusic.com" class="button">Get Tickets</a>\
        </td>\
      </tr>\
      <tr>\
        <td>SEP 16 SUN</td>\
        <td>Private (TBA)</td>\
        <td>Kansas City, KS</td>\
        <td><a href="https://www.bandsintown.com/e/100283136?app_id=squarespace-starparks&came_from=267&utm_medium=api&utm_source=public_api&utm_campaign=event&mkt_source=www.starparksmusic.com" class="button">Get Tickets</a>\
        </td>\
      </tr>\
      <tr>\
        <td>OCT 3 WED</td>\
        <td>Cheer Up Charlies</td>\
        <td>Austin, TX</td>\
        <td><a href="https://www.bandsintown.com/e/100283126?app_id=squarespace-starparks&came_from=267&utm_medium=api&utm_source=public_api&utm_campaign=event&mkt_source=www.starparksmusic.com" class="button">Get Tickets</a>\
        </td>\
      </tr>\
      <tr>\
        <td>NOV 10 SAT</td>\
        <td>Stay Gold</td>\
        <td>Austin, TX</td>\
        <td><a href="https://www.bandsintown.com/e/100283220?app_id=squarespace-starparks&came_from=267&utm_medium=api&utm_source=public_api&utm_campaign=event&mkt_source=www.starparksmusic.com" class="button">Get Tickets</a>\
        </td>\
      </tr>\
      <tr>\
        <td>NOV 28 WED</td>\
        <td>Texas Radio Live w/ PR Newman</td>\
        <td>Austin, TX</td>\
        <td><a href="https://www.bandsintown.com/e/100283149?app_id=squarespace-starparks&came_from=267&utm_medium=api&utm_source=public_api&utm_campaign=event&mkt_source=www.starparksmusic.com" class="button">Get Tickets</a>\
        </td>\
      </tr>\
    </tbody>\
  </table>');
});

$('#aboutBtn').one('click', function() {
  $('#aboutBtn').append('<br><h6>The project of Austin, Texas songwriter Andy Bianculli, Star Parks mixes 60s psychedelia and girl group pop with painstaking arrangements in the lineage of Lee Hazelwood, Jon Brion and Brian Wilson. The result is a set of bittersweet tracks full of melancholy and exuberance that is Dont Dwell, their debut album available on Paper Trail Records.\
Star Parks debut album, released in 2016, has caught recognition by Paste Magazine, Daytrotter, The Austin Chronicle, KUTX 98.9, Do512, Austin Monthly, Austin Culture Man and Bandcamp. Star Parks frequents local favorite venues such as: 3Ten, The Mohawk, Stubbs, Cheer Up Charlies, The Scoot Inn, Stay Gold, ABGB, Hotel Vegas and has toured internationally.\
</h6>');
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
