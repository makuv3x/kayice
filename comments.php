<?php
  echo '
  <div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
      <form method="POST" action="'.setComments($conn).'">
        <div class="form-group">
        <input type="hidden" name="name" value="mau">
        <input type="hidden" name="date" value="'.date('Y-m-d H:i:s').'">
          <textarea class="form-control" rows="3" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="commentSubmit">Submit</button>
      </form>
    </div>
  </div>';


  getComments($conn);
?>