function logout() {
  $.post('includes/handlers/ajax/logout.php', function () {
    location.reload();
  });
}
