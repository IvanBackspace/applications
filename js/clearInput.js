document.getElementById('openModalButton').addEventListener('click', function () {
  var inputElements = document.querySelectorAll('input[type="text"], input[type="tel"], input[type="email"]');

  inputElements.forEach(function (inputElement) {
    inputElement.value = '';
    inputElement.style.borderColor = '#dee2e6';
  });

  var phpValidElement = document.getElementById('phpValid');
  if (phpValidElement) {
    phpValidElement.textContent = '';
  }
});
