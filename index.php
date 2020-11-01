<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
  .name
  {
    float:left;
    margin-top: 50px;
    margin-left: 20px;
    width: 250px;
    text-align:center;
  }

  .calc
  {
      border-style:solid;
      border-width: 1px;
      float: left;
      margin-left: 150px;
      width: 200px;
      text-align: center;
  }

  .box1
  {
      width:  100px;
  }

  .box2
  {
      width: 100px;
  }

  .gcd
  {
    margin-top: 40px;
  }




  </style>
  <body>
      <div class="name">
        <h1>Aldrin Seroje</h1>
      </div>

      <div class="calc">
         <h3 class="calcu">Calculator</h3>
         <form class="" action="index.php" method="post">

        <p> Input first number: </p>
        <input type="text" name="num1" value="" class="box1">

        <p> Input second number: </p>
        <input type="text" name="num2" value="" class="box2">
        <br>
       <p>Operation</p>

       <input type="submit" name="add" value="+">
       <input type="submit" name="min" value="-">
       <input type="submit" name="mul" value="*">
       <input type="submit" name="div" value="/">

    </form>
     <div class="gcd">
     <p><b>Finding GCD</b></p>
     <form class="" action="index.php" method="post">
      <p> Input 1st number</p>

      <input type="text" name="num3" value="" class="box2">
      <p> Input 2nd number</p>

      <input type="text" name="num4" value="" class="box2">
      <br>
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>
    </div>

    <?php
      if (!empty($_POST))
      { ?>

         <h1 class="answer"><?php echo "Answer ↓"; ?></h1>

        <?php if (isset($_POST['add']))
        {
           echo $_POST['num1'] + $_POST['num2'];
              $result1;
        }
        else if (isset($_POST['min']))
        {
            echo $_POST['num1'] - $_POST['num2'];
        }
        else if (isset($_POST['mul'])) {
            echo $_POST['num1'] * $_POST['num2'];
        }
        else if (isset($_POST['div'])) {
            echo $_POST['num1'] / $_POST['num2'];
        }
        else {
            $gcd = 1;
            for ($i=1; $i <= $_POST['num3'] && $i <= $_POST['num4'] ; $i++)
            {
              if($_POST['num3'] % $i == 0 && $_POST['num4'] % $i == 0)
              $gcd = $i;
          }
           echo $gcd;
        }
      }
    ?>
    </input>
  </body>
</html>
