<?php
if (isset($_COOKIE['remember'])) {
  $token = $_COOKIE['remember'];
  require_once "./admin/connect.php";
  $sql = "select * from customers
    where token = '$token'
    limit 1";
  $arr_result = mysqli_query($connect, $sql);
  $num_row = mysqli_num_rows($arr_result);
  if ($num_row == 1) {
    $result = mysqli_fetch_array($arr_result);
    $_SESSION['id'] = $result['id'];
    $_SESSION['name'] = $result['name'];
  }
}
?>

<div class="modal fade" id="modal-signin">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Đăng Nhập</h4>
        <button type="button" aria-label="close" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="signin-form">
          <div class="form-floating mb-3">
            <input class="form-control" type="email" name="email" placeholder="Email" spellcheck="false">
            <label>Email</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" type="password" name="password" placeholder="Mật Khẩu" autocomplete="on" spellcheck="false">
            <label>Mật Khẩu</label>
          </div>
          <div class="d-flex align-items-center mb-3">
            <input type="checkbox" name="remember" id="remember" spellcheck="false">
            <label for="remember">Ghi Nhớ Đăng Nhập</label>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="./forgot-password.php">Quên Mật Khẩu</a>
            <button type="submit" id="btn-submit-signin" class="btn btn-dark">Đăng Nhập</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require './footer-tag.php' ?>
<script>
  $(document).ready(function() {
    $('#signin-form').submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: './process-signin.php',
        type: 'POST',
        dataType: 'html',
        data: $(this).serializeArray(),
        success(response) {
          if (response == -1) {
            $("input[name='password']").val('');
            $("input[name='email']").focus();
          } else {
            location.reload();
          }
        },
        error() {
          console.error('error');
        }
      })
    });
  });
</script>