<?php
  include('head.php');
?>

<body>

<?php
  include('navigation.php');
?>

<?php
  include('main_header.php');
?>
<div class="center jumbotron" style="width: 50%; align: center; margin: 10px auto; background-color: #C0C0C0; border: 2px solid #000; box-shadow: 10px 10px 15px #000; margin-bottom: 45px;">
  <h1 style="font-family: 'Lora', serif; font-size: 25px; text-shadow: 10px 10px 15px #000; text-align: center; margin-bottom: 30px;">
    Please Select Your Form:
  </h1>
  <table border="0" align="center" style="border: 0px;">
    <tr>
      <td>
        <button type="button" class="btn btn-lg btn-outline-primary" style="font-family: 'Cinzel', serif;" onclick="Form1Click()">Contractors General Liability Application</button>
      </td>
      <td>
        <button type="button" class="btn btn-lg btn-outline-primary" style="font-family: 'Cinzel', serif;" onclick="Form2Click()">Garage Application</button>
      </td>
    </tr>
  </table>
</div>

<?php
  include('forms/form1/form.php');
?>
<?php
  include('forms/form2/form.php');
?>
