'use strict';

import './theme';
import './login';

$(function () {
  // initial theme change
  const theme = localStorage.getItem('theme') || 'dark';
  if (theme === 'light')
    $('#theme-switch-toggle').prop('checked', true).trigger('change');
});
