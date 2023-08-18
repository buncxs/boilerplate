/**
 *
 * AuthForgotPassword
 *
 * Pages.Authentication.ForgotPassword page content scripts. Initialized from scripts.js file.
 *
 *
 */

class AuthForgotPassword {
  constructor() {
    // Initialization of the page plugins
    this._initForm();
  }

  // Form validation
  _initForm() {
    const form = document.getElementById('forgotPasswordForm');
    if (!form) {
      return;
    }
    const validateOptions = {
      rules: {
        email: {
          required: true,
          email: true,
        },
      },
      messages: {
        email: {
          email: 'Your email address must be in correct format!',
        },
      },
    };
    jQuery(form).validate(validateOptions);
  }
}
