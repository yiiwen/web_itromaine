$("#login-form").submit(function(){

  const username = $('#username').val().trim();
  const password = $('#password').val().trim();
  if (username == '') {
      $('#alert-content').text("用户名不能为空");
      $("#login-form-alert").modal('toggle');
      $("#username").focus();
      return false;
  }
  if (password == '') {
      $('#alert-content').text("密码不能为空");
      $("#login-form-alert").modal('toggle');
      return false;
  }
  if (password.length < 6) {
      $('#alert-content').text("密码长度不能小于6位数");
      $("#login-form-alert").modal('toggle');
      return false;
  }
});
