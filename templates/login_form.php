<!DOCTYPE html>
<html>
<head>
  <title>Log In or Sign Up</title>
  <link href="../public/css/bootstrap.css" rel="stylesheet"/>
  <link href="../public/css/styles.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../public/js/jquery-1.10.2.min.js"></script>
  <script src="../public/js/bootstrap.min.js"></script>

  <style type="text/css">
        .modal {
        text-align: center;
        padding: 0!important;
      }

      .modal:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -4px;
      }

      .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
      }
  </style>
</head>
<body >


<script type="text/javascript">
    $(window).on('load',function(){
      $('#loginModal').modal({backdrop: 'static', keyboard: false})
        $('#loginModal').modal('show');
    });
</script>

<!-- Modal -->
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <ul class="nav nav-tabs">
            <li class="active"><a href="#login" data-toggle="tab" aria-expanded="false">Log In</a></li>
          </ul>
          <br>
          <span class="right text-info">To continue to the site you must first log in or sign up. Thank you.</span>

        </div>
        <div class="modal-body">
          <div id="login_signup" class="tab-content">
              <div class="tab-pane fade active in" id="login">
                <form action="../public/login.php" method="post">

                  <div class="form-group">
                    <label for="username/email">Username</label>
                    <input type="text" name="username" class="form-control" tabindex="1"  required="required" placeholder="Username/Email" />
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" tabindex="2" required="required" placeholder="Password" />
                  </div>

                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" tabindex="3" required="required" placeholder="Name" />
                  </div>


                  <div class="row">
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-primary btn-md" name="btn_type" value="signup">Sign Up</button>
                    </div>
                    <div class="col-md-8"></div>
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-primary btn-md" name="btn_type" value="login">Log In</button>
                    </div>
                  </div>
                </form>
              </div>
              
              </div>

          </div>

      </div>

    </div>
  </div>

</body>
</html>
