<h1 class="ribbon">
    <strong class="ribbon-content">Broadcast Sessions</strong>
  </h1>
  <form action="{{path('post_session')}}" method="post" class="custom">
  	<script type="text/javascript">
  		$('#question').val($('#base_question').val());
  	</script>
  	<input type="hidden" value="" name="question" id="question" />
    <table id="tutorTable">
      <thead>
        <tr>
          <th>Room</th>
          <th width="130px">Name</th>
          <th class="short-bio">Username</th>
          <th>Start</th>
          <th>End</th>
          <th>Status</th>
          <th>Join</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          if(!$broadcast_sessions){
            echo "There are currently no active sessions";
          }
          else{
            foreach($broadcast_sessions as $item){
              echo '<tr>';
              echo '<td>'.$item['broadcast_id'].'</td>';
              echo '<td width="130px">'.$item['fname']." ".$item['lname'].'</td>';
              echo '<td width="118px">'.$item['username'].'</td>';
              echo '<td>'.$item['start'].'</td>';
              echo '<td width="130px">'.$item['end'].'</td>';
              echo '<td data-status="online">Active</td>';
              echo '<td><a href="http://mathcentre.rayku.com:8080/broadcast/'.$item['broadcast_id'].'">Join Broadcast</a></td>';
              echo '</tr>';
            }
          }
        ?>
      </tbody>
    </table>
    <input type="submit" class="bbutton" id="tutorConnect">
  </form>
  <script>