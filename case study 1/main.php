<html>
<head><title>Venue Reservation System</title>
</head>
<body>
<div class="table-responsive">
              <form role="form"  id ="theform"  method="post" action="DateCheck.php">
                <input type="hidden" name="id" value="<?php  echo $_SESSION['sess_user_id']; ?>" />
                Venue Number: <input type="text" name="venue"><br>
                  <label for="Check-in">Check-in:</label>
                  <div class="form-group">
                    <select name="checkin" id="checkin">
                      <option value="8.00am">8.00am</option>
                      <option value="9.00am">9.00am</option>
                      <option value="10.00am">10.00am</option>
                      <option value="11.00am">11.00am</option>
                      <option value="12.00am">12.00pm</option>
                      <option value="1.00pm">1.00pm</option>
                      <option value="2.00pm">2.00pm</option>
                      <option value="3.00pm">3.00pm</option>
                      <option value="4.00pm">4.00pm</option>
                      <option value="5.00pm">5.00pm</option>
                      <option value="6.00pm">6.00pm</option>
                      <option value="7.00pm">7.00pm</option>
                      <option value="8.00pm">8.00pm</option>
                      <option value="9.00pm">9.00pm</option>
                      <option value="10.00pm">10.00pm</option>
                      <option value="11.00pm">11.00pm</option>
                    </select>
                  </div>
                  <label for="checkout">Check-out:</label>
                  <div class="form-group">
                    <select name="checkout" id="checkout">
                      <option value="8.00am">8.00am</option>
                      <option value="9.00am">9.00am</option>
                      <option value="10.00am">10.00am</option>
                      <option value="11.00am">11.00am</option>
                      <option value="12.00am">12.00pm</option>
                      <option value="1.00pm">1.00pm</option>
                      <option value="2.00pm">2.00pm</option>
                      <option value="3.00pm">3.00pm</option>
                      <option value="4.00pm">4.00pm</option>
                      <option value="5.00pm">5.00pm</option>
                      <option value="6.00pm">6.00pm</option>
                      <option value="7.00pm">7.00pm</option>
                      <option value="8.00pm">8.00pm</option>
                      <option value="9.00pm">9.00pm</option>
                      <option value="10.00pm">10.00pm</option>
                      <option value="11.00pm">11.00pm</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="startdate">Start Date:</label>
                    <input type="date" class="form-control" id="startdate" name="startdate" placeholder="Start Date" />
                  </div>
                  <div class="form-group">
                    <label for="enddate">End Date:</label>
                    <input type="date" class="form-control" id="enddate" name="enddate" placeholder="End Date" />
                  </div>
                  <div class="form-group"><label for="program"> Program Name:</label>
                 <input type="text" name="program"> </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form><br>
				<iframe src="https://www.google.com/calendar/embed?title=Reservations&amp;showTabs=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=tsrtpu7h456a7c69c8lf1d6lv4%40group.calendar.google.com&amp;color=%232952A3&amp;src=pbk69l1rv8f6pi64l02mi937kg%40group.calendar.google.com&amp;color=%23B1365F&amp;src=venureservation%40gmail.com&amp;color=%23125A12&amp;ctz=America%2FNew_York" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
</body>
</html>