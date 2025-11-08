<?php
// Minimal index so WP accepts the theme.
// Headless — Next.js will render the frontend.
?>
<!doctype html>
<html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php bloginfo('name'); ?></title>
</head>
<body>
  <h1>AVR Theme (Headless)</h1>
  <p>This is a headless WordPress theme. Your frontend should be built with Next.js and fetch data from /graphql or REST API.</p>
</body>
</html>
