<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Regular Expressions</title>
  </head>
  <body>
    <?php
      // regex quantifiers:
      // * -> Match zero or more of the previous
      // + -> Match one or more of the previous
      // ? -> Match one or zero of the previous
      // {4} -> Match exactly number of previous
      // {3,} -> Match at least min of previous
      // {min,max} -> Match at least min but not more than max of previous characters.

      // regex anchors
      // ^ -> Match start of the line.
      // $ -> Match end of line.
      // . -> Match any single character.
    ?>

    <?php
      // Name: /^[A-Za-z. ]*$/
      // Email: /[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}
      // Website: /(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*
    ?>
  </body>
</html>
