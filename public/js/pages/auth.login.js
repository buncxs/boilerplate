/**
 *
 * AuthLogin
 *
 * Pages.Authentication.Login page content scripts. Initialized from scripts.js file.
 *
 *
 */

class AuthLogin {
  constructor() {
    // Initialization of the page plugins
    this._initForm();
  }

  // Form validation
  _initForm() {
    const form = document.getElementById('loginForm');
    if (!form) {
      return;
    }
    const validateOptions = {
      rules: {
        input_type: {
          required: true,
        },
        password: {
          required: true,
        }
      },
      messages: {
        input_type: {
          required: 'Please enter your username!',
        },
        password: {
          required: 'Please enter your password!',
        },
      },
    };
    jQuery(form).validate(validateOptions);
  }
}
