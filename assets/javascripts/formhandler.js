var $form = $('#frmRegister'),
    url = 'https://script.google.com/macros/s/AKfycby386gB-X6RenKLghVNSJSYy5T4HixVaqOEqlMtKK9yQTp81xg/exec'

$('#submit-form').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serializeObject()
  }).success(
    // do something
  );
})