<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <title>Homo Socialis - The Pilot Project</title>
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="favicon.png" type="image/png" />
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" href="css/base.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/custom.css" />
  <style>
.type-code {
  width: 4ex;
}
<!-- -->
  </style>
</head>
<body class="skin" style=""><?php

$ask = '19+5';
$code = '24';

if (! isset($_REQUEST['code'])) {
  echo '<form method="POST" action="get-mail-address.php" autocomplete="off">
Are you spam? Enter ', $ask, ' = 
<input type="text" id="code-input" name="code" class="type-code" autofocus /> 
<input type="submit" value="Go" />
</form>';
} elseif (trim($_REQUEST['code']) != $code) {
  echo '<form method="POST" autocomplete="off">
Try again, type result of ', $ask, ' = 
<input type="text" id="code-input" name="code" class="type-code" autofocus /> 
<input type="submit" value="Go" />
</form>';
} else {
  echo '
mail: <a href="mailto:mail2019@HomoSocialis.org">mail2019@HomoSocialis.org</a>
';
}
?><script>
window.onload = function() {
  document.getElementById("code-input").focus();
};
document.getElementById("code-input").focus();
</script></body>
</html>

