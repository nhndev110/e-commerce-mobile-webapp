<div class="modal fade" id="modal-signup">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Đăng Kí Tài Khoản</h4>
        <button type="button" aria-label="close" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="signup-form">
          <div class="form-floating">
            <input class="form-control" type="text" name="name" spellcheck="false" placeholder="Họ Và Tên">
            <label>Họ Và Tên</label>
          </div>
          <div class="form-floating mt-3 mb-3">
            <input class="form-control" type="email" name="email" spellcheck="false" placeholder="Email">
            <label>Email</label>
          </div>
          <div class="form-floating mt-3 mb-3">
            <input class="form-control" type="password" name="password" spellcheck="false" placeholder="Mật Khẩu" autocomplete="on">
            <label>Mật Khẩu</label>
          </div>
          <div class="form-floating mt-3 mb-3">
            <input class="form-control" type="number" name="phone_number" spellcheck="false" placeholder="Số Điện Thoại">
            <label>Số Điện Thoại</label>
          </div>
          <div class="form-floating mt-3 mb-3">
            <input class="form-control" type="text" name="address" spellcheck="false" placeholder="Địa Chỉ">
            <label>Địa Chỉ</label>
          </div>
          <button class="btn btn-secondary float-end">Đăng Ký</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php // require './footer-tag.php' ?>
<script>
  $(document).ready(function() {
    $('#signup-form').submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: './process-signup.php',
        type: 'POST',
        dataType: 'html',
        data: $(this).serializeArray(),
        success(response) {
          if (response == 1) {
            location.reload()
          } else {
            $('#signup-form')[0].reset();
          }
        },
        error() {
          console.error("error");
        }
      })
    });
  });
</script>