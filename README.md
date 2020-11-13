# UNB Libraries Saml
## unb_lib_saml

Custom support module to add UNB Libraries login form UI customizations.

## License
- unb_lib_theme is licensed under the MIT License:
  - http://opensource.org/licenses/mit-license.html

## Features
- Adds URL Alias `/login` to Saml Authentications `/saml_login` route
- Adds an alert to the Drupal core user login form that links to the Saml login route
- Supports UNB & optional STU login field description strings
  - STU reference can be toggled at `/admin/config/unb_lib_saml/adminsettings`
- Replaces Drupal core login form error message references with Saml-based versions
   
## Pre-requites
- This module depends on SAML Authentication module, 8.x-3.0-alpha2 version or better:
  - https://www.drupal.org/project/samlauth