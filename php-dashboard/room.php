<?php include "head.php";
include "nav.php";
include "sidebar.php";
?>

   <!-- Main Content -->
 
 <div class="main-content">
        <div class="container py-5">
          <h5 class="fw-bold mb-2 ps-2">Room</h5>
          <div class="card card-custom w-100">
            <div class="card-body">
              <h6 class="mb-3 fw-bold">Room</h6>
              <table id="example" class="table table-striped table-bordered align-middle">
                <thead class="table-light">
    <tr>
      <th>Room ID</th>
      <th>Room-Number</th>
      <th>Floor</th>
      <th>Room-bed</th>
      <th>Max-guest</th>
     <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1</td>
        <td>101</td>
        <td>1st</td>
        <td>2</td>
        <td>4</td>
        <td><span class="badge bg-success">Available</span></td>
      </tr>
    <tr>
        <td>2</td>
        <td>102</td>
        <td>1st</td>
        <td>3</td>
        <td>6</td>
        <td><span class="badge bg-danger">Booked</span></td>
      </tr>
      <tr>
        <td>3</td>
        <td>201</td>
        <td>2nd</td>
        <td>1</td>
        <td>2</td>
        <td><span class="badge bg-warning text-dark">Maintenance</span></td>
      </tr>
      <tr>
        <td>4</td>
        <td>202</td>
        <td>2nd</td>
        <td>2</td>
        <td>4</td>
        <td><span class="badge bg-success">Available</span></td>
      </tr>
      <tr>
        <td>5</td>
        <td>301</td>
        <td>3rd</td>
        <td>3</td>
        <td>6</td>
        <td><span class="badge bg-danger">Booked</span></td>
      </tr>
      <tr>
        <td>6</td>
        <td>302</td>
        <td>3rd</td>
        <td>1</td>
        <td>2</td>
        <td><span class="badge bg-success">Available</span></td>
      </tr>
      <tr>
        <td>7</td>
        <td>401</td>
        <td>4th</td>
        <td>2</td>
        <td>4</td>
        <td><span class="badge bg-warning text-dark">Maintenance</span></td>
      </tr>
      <tr>
        <td>8</td>
        <td>402</td>
        <td>4th</td>
        <td>3</td>
        <td>6</td>
        <td><span class="badge bg-success">Available</span></td>
      </tr>
      <tr>
        <td>9</td>
        <td>501</td>
        <td>5th</td>
        <td>2</td>
        <td>4</td>
        <td><span class="badge bg-danger">Booked</span></td>
      </tr>
      <tr>
        <td>10</td>
        <td>502</td>
        <td>5th</td>
        <td>1</td>
        <td>2</td>
        <td><span class="badge bg-success">Available</span></td>
      </tr>
  </tbody>
</table>
</div>
  </div>
</div>
<?php 
  include "footer.php";

?>

