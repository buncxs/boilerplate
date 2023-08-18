/**
 *
 * AuthRegister
 *
 * Pages.Authentication.Register page content scripts. Initialized from scripts.js file.
 *
 *
 */

class AuthRegister {
  constructor() {
    // Initialization of the page plugins
    this._initForm();
  }

  // Form validation
  _initForm() {
    const form = document.getElementById('registerForm');
    if (!form) {
      return;
    }
    const validateOptions = {
      rules: {
        name: {
          required: true,
        },
        username: {
          required: true,
        },
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 6,
          regex: /[a-z].*[0-9]|[0-9].*[a-z]/i,
        },
        password_confirmation: {
          required: true,
          minlength: 6,
          regex: /[a-z].*[0-9]|[0-9].*[a-z]/i,
          equalTo: "#password"
        },
      },
      messages: {
        name: {
          required: 'Please enter your name!',
        },
        username: {
          required: 'Please enter your username!',
        },
        email: {
          required: 'Please enter your email!',
          email: 'Your email address must be in correct format!',
        },
        password: {
          required: 'Please enter your password!',
          minlength: 'Password must be at least {0} characters!',
          regex: 'Password must contain a letter and a number!',
        },
        password_confirmation: {
          required: 'Please confirm your password!',
          minlength: 'Password must be at least {0} characters!',
          regex: 'Password must contain a letter and a number!',
          equalTo: 'Password must match',
        },
      },
    };
    jQuery(form).validate(validateOptions);
  }
}
