<div class="container primary-container">
  <?php if(DinklyFlash::exists('good_user_message')): ?>
    <div class="alert alert-success">
    <?php echo DinklyFlash::get('good_user_message'); ?>
    <button type="button" class="close message-close" aria-hidden="true">&times;</button>
  </div>
  <?php endif; ?>
  <?php if(DinklyFlash::exists('error')): ?>
  <div class="alert alert-danger">
  <?php echo DinklyFlash::get('error'); ?>
  <button type="button" class="close message-close" aria-hidden="true">&times;</button>
  </div>
  <?php endif; ?>

  <div>
    <h2>
        Dashboard
    </h2>
    <p>Hello <?php echo ucfirst(strtolower($logged_user->getFirstName())); ?>!</p>
    <hr>

    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4">
            <div class="jumbotron dashboard-jumbotron text-center">
              <i class="fa fa-user fa-5x"></i>
              <h4><a class="jumbo-link" href="/user">Users</a></h4>
              <hr>
              <p>Manage Users</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="jumbotron dashboard-jumbotron text-center">
              <i class="fa fa-group fa-5x"></i>
              <h4><a class="jumbo-link" href="/group">Groups</a></h4>
              <hr>
              <p>Manage Groups</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="jumbotron dashboard-jumbotron text-center">
              <i class="fa fa-gears fa-5x"></i>
              <h4><a class="jumbo-link" href="/admin/profile">Settings</a></h4>
              <hr>
              <p>Edit Profile and Settings</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
  $('.dashboard-jumbotron').hover(function() {
     $(this).find('.btn-lg').css('background','#217dbb');
     $(this).find('.btn-lg').css('border-color','#217dbb');
  },
  function(){
    $(this).find('.btn-lg').css('background','#3498db');
    $(this).find('.btn-lg').css('border-color','#3498db');
  });

  $('.dashboard-jumbotron').on('click', function() {
    var where = $(this).find('.jumbo-link').attr('href');
    window.location = where;
  });

});
</script>