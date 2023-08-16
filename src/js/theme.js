'use strict';

$(function () {
  $('#theme-switch-toggle').on('change', function () {
    const label = $('label[for="theme-switch-toggle"]');
    const checked = $(this).prop('checked');
    if (checked) {
      localStorage.setItem('theme', 'light');
      label.css('padding', '0.375rem 0.65rem');
      label.removeClass('btn-dark');
      label.addClass('btn-light bg-body-secondary');
      label.children('i').removeClass('fa-moon');
      label.children('i').addClass('fa-sun');
      $('body').attr('data-bs-theme', 'light');
    } else {
      localStorage.setItem('theme', 'dark');
      label.css('padding', '0.375rem 0.75rem');
      label.removeClass('btn-light bg-body-secondary');
      label.addClass('btn-dark');
      label.children('i').removeClass('fa-sun');
      label.children('i').addClass('fa-moon');
      $('body').attr('data-bs-theme', 'dark');
    }
  });
});
