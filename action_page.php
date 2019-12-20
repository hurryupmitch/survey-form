<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"></meta>
    <title>Thank You</title>
<style>
/*container can be called main*/
.container {
  max-width: 1200px;
  margin: 0 auto;
}
.row {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.column {
  flex-basis: 100%;
}

@media screen and (min-width: 800px) {
  .column {
    flex: 1;
  }
}
@media screen and (min-width: 800px) {
  ._25 {
    flex: 2.5;
  }
  ._55 {
    flex: 5.5;
  }
  ._20 {
    flex: 2;
  }
}
body {
    font-family: 'Cardo', serif;
    color: #c0ccd4;
    background-color: #484d5c;
    background-image: url(https://i.imgur.com/gLJfpqS.png);
    /*background-repeat: no-repeat;*/
    background-size: 100% 100%;
    background-attachment: fixed;
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    color: #ffce00
}
.topnav {
    background-color: black;
    overflow: hidden;;
}
.topnav a {
    float: right;
    color: #ffce00;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 14px;
}
.topnav a:hover {
    background-color: #484d5c;
    color: white;
}
.topnav a.active {
    background-color: #484d5c;
    color: white;
}
</style>
</head>

<body>
    <div class="container">
    <h1 id=title>Thank You!</h1>
    <p id=description>Your submission has been accepted and the FBI will be contacting you shortly!</p>
    <div class="row">
        <div class="column">
          <!-- 100% width -->
        </div>
      </div>
    </div>
<script>
</script>
<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $say = htmlspecialchars($_POST['say']);
  $to  = htmlspecialchars($_POST['to']);

  echo  $say, ' ', $to;
?>
</body>
</html>