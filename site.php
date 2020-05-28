 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Basic PHP Calculator</title>
  </head>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
  <style>
  .myDiv {
    border: 5px outset #5ed173;
    background-color: #5ed173;
    text-align: center;
  }

body {
    font-family: 'Open Sans';font-size: 22px;
}
</style>
  <body>
    <div class="myDiv">
      <h1 style="color:white">Basic PHP Calculator</h1>
      <h4 style="color:white">By Dante Nincevic</h4>
    </div>

    <h3>Calculate Addition Problem</h3>
    <form action="site.php" method="get">
      <input type="number" name="num1">
      <p>+</p>
      <input type="number" name="num2">
      <input type="submit">
    </form>

      Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>
      <p>&nbsp;</p>
      <hr>

      <h3>Calculate Multiplication Problem</h3>
      <form action="site.php" method="get">
        <input type="number" name="num3">
        <p>x</p>
        <input type="number" name="num4">
        <input type="submit">
      </form>

        Answer: <?php echo $_GET["num3"] * $_GET["num4"]?>
        <p>&nbsp;</p>
        <hr>

        <h3>Calculate Subtraction Problem</h3>
        <form action="site.php" method="get">
          <input type="number" name="num5">
          <p>-</p>
          <input type="number" name="num6">
          <input type="submit">
        </form>

          Answer: <?php echo $_GET["num5"] - $_GET["num6"]?>
          <p>&nbsp;</p>

  </body>
</html>
