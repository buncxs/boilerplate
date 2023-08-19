/**
 *
 * AuthEdit
 *
 * Pages.Authentication.EditProfile page content scripts. Initialized from scripts.js file.
 *
 *
 */

class AuthEditProfile {
    constructor() {
        this._initFormProfile();
        this._initFormPassword();
    }

    // Form Profile validation
    _initFormProfile() {
        const form = document.getElementById("resetProfileForm");

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
            },
            messages: {
                name: {
                    required: "Please enter your name",
                },
                username: {
                    required: "Please enter your username",
                },
                email: {
                    required: "Please enter your email",
                    email: "Your email address must be in correct format",
                },
            },
        };
        jQuery(form).validate(validateOptions);
    }

    // Form Password Validation
    _initFormPassword() {
        const form = document.getElementById("resetPasswordForm");

        const validateOptions = {
            rules: {
                current_password: {
                    required: true,
                    minlength: 6,
                    regex: /[a-z].*[0-9]|[0-9].*[a-z]/i,
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
                    equalTo: "#password",
                },
            },
            messages: {
                current_password: {
                    minlength: "Password must be at least {0} characters!",
                    regex: "Password must contain a letter and a number!",
                },
                password: {
                    minlength: "Password must be at least {0} characters!",
                    regex: "Password must contain a letter and a number!",
                },
                password_confirmation: {
                    minlength: "Password must be at least {0} characters!",
                    regex: "Password must contain a letter and a number!",
                    equalTo: "Passwords must match!",
                },
            },
        };
        jQuery(form).validate(validateOptions);
    }
}
