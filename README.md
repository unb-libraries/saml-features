# UNB Libraries Saml
## saml_features

Custom support module to add UNB Libraries login form UI customizations

## Features
- Adds URL Alias `/login` to Saml Authentications `/saml_login` route
- Adds an alert to the Drupal core user login form that links to the Saml login route
- Supports UNB & optional STU login field description strings
  - STU reference can be toggled at `/admin/config/saml_features/adminsettings`
- Replaces Drupal core login form error message references with Saml-based versions

## Installation Note
- Please increase the weight of the `saml_features` **module** array element to **11** in your Drupal repo's
 `config-yml/core.extension.yml` configuration file:

  ```
  module:
     ...
     externalauth: 10
     views: 10
     saml_features: 11
     ...
  ```

## Prerequisite
- This module depends on SAML Authentication module, 8.x-3.0-alpha2 version or better:
  - https://www.drupal.org/project/samlauth

## License
- saml_features is licensed under the MIT License:
  - http://opensource.org/licenses/mit-license.html
