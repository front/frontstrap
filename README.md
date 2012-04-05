# Frontstrap: A nice starting theme

## Get started

1. $ drush dl sasson
2. Check out your theme settings page for layout and grid settings, development settings, SASS settings and more. Much more info in Sasson's README.txt
3. Here is a cute kitten: http://goo.gl/SVyem


## Style test
1. Make a basic page in Drupal using Full HTML, and paste the content of bootstrap-html.txt
2. Repeat with drupal-html.txt

## Todos
- Implement jQuery UI bootstrap theme http://addyosmani.github.com/jquery-ui-bootstrap/ Scrap the non-jQuery bootstrap js.
- Make nice login
- ???

## How to update bootstrap libraries

Use Thomas McDonald's SASS port of Twitter Bootstrap

1. Download [Bootstrap for Sass][1]
2. Extract the archive and get the assets from the vendor/ directory
3. Copy assets:
  - Images from **images/** to **images/**
  - Javascript libraries from **javascripts/** to **scripts/**
  - **bootstrap/** directory from **stylesheets/** to **styles/partials/**



[1]: https://github.com/thomas-mcdonald/bootstrap-sass
