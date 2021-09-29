<?php
if(isset($_POST['submit'])){
    $txt = $_POST['txt'];
    $md5= md5($txt);
   }
?>
<?php
if(isset($_POST['submit1'])){
    $txt1 = $_POST['txt1'];
    $number_format= number_format($txt1);
   }
?>
<?php
if(isset($_POST['submit2'])){
    $txt2 = $_POST['txt2'];
    $ord= ord($txt2);
   }
?>
<?php
if(isset($_POST['submit3'])){
    $txt3 = $_POST['txt3'];
    $txt_3 = $_POST['txt_3'];
    $rtrim= rtrim($txt3,$txt_3);
   }
?>

<?php
if(isset($_POST['submit4'])){
    $txt4 = $_POST['txt4'];
    $txt_4 = $_POST['txt_4'];
    $txt__4 = $_POST['txt__4'];
    $str_replace= str_replace($txt4,$txt_4,$txt__4);
   }
?>
<?php
if(isset($_POST['submit5'])){
    $txt5 = $_POST['txt5'];
    $strlen= strlen($txt5);
}
?>
<?php
if(isset($_POST['submit6'])){
    $txt6 = $_POST['txt6'];
    $txt_6 = $_POST['txt_6'];
    $strcasecmp= strcasecmp($txt6,$txt_6);
   }
?>
<?php
if(isset($_POST['submit7'])){
    $txt7 = $_POST['txt7'];
    $txt_7 = $_POST['txt_7'];
    $strrpos= strrpos($txt7,$txt_7);
   }
?>
<?php
if(isset($_POST['submit8'])){
    $txt8 = $_POST['txt8'];
    $txt_8 = $_POST['txt_8'];
    $substr= substr($txt8,$txt_8);
   }
?>
<?php
if(isset($_POST['submit9'])){
    $txt9 = $_POST['txt9'];
    $strtolower= strtolower($txt9);
   }
?>
<?php
if(isset($_POST['submit10'])){
    $txt10 = $_POST['txt10'];
    $Bintohex= bin2hex($txt10);
   }
?> 
<?php
if(isset($_POST['submit11'])){
    $txt11 = $_POST['txt11'];
    $txt_11 = $_POST['txt_11'];
    $chop= chop($txt11,$txt_11);
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MD5 mash Generator</title>
    <h1>Assignment-4</h1>
    <h1>Name:Gautam Singh</h1>
    <h1>University-roll-no:191500301</h1>
</head>
<body >
    <div class="wrapper0">
        <h2>Q1.MD5 mash Generator</h2>
        <p><?php if(isset($_POST['submit'])){ echo  $md5;}?></p>
        <form class="form" action="" method="post">
        <td> enter_text</td>
            <input type="text" name="txt" required>
            <button type="submit" name="submit">Generator</button>
</form>
</div>
<div class="wrapper1">
        <h2>Q2. Number_format()</h2>
        <p><?php if(isset($_POST['submit1'])){ echo  $number_format;}?></p>
        <form class="form" action="" method="post">
        <td>enter_number</td>
            <input type="text" name="txt1" required>
            <button type="submit1" name="submit1">Generator</button>
</form>
</div>
<div class="wrapper2">
        <h2>Q3. Ord()</h2>
        <p><?php if(isset($_POST['submit2'])){ echo  $ord;}?></p>
        <form class="form" action="" method="post">
        <td>enter string check ascii value</td>
            <input type="text" name="txt2" required>
            <button type="submit2" name="submit2">Generator</button>
</form>
</div>
<div class="wrapper3">
        <h2>Q4. Rtrim</h2>
        <p><?php if(isset($_POST['submit3'])){ echo  $rtrim;}?></p>
        <form class="form" action="" method="post">
            <td> enter string</td>
            <input type="enter_name" name="txt3" required>
            <td>choose name of string to remove</td>
            <input type="enter_remove_name_string" name="txt_3" required>
            <button type="submit3" name="submit3">Generator</button>
</form>
</div>
<div class="wrapper4">
        <h2>Q5. Str_replace()</h2>
        <p><?php if(isset($_POST['submit4'])){ echo  $str_replace;}?></p>
        <form class="form" action="" method="post">
            <td>enter_remove_name_string</d>
            <input type="enter_remove_name_string" name="txt4" required>
            <td>enter_add_string</td>
            <input type="enter_add_string" name="txt_4" required>
            <td>enter_name_strin<td>
            <input type="enter_name_string" name="txt__4" required>
            <button type="submit4" name="submit4">Generator</button>
</form>
</div>
<div class="wrapper5">
        <h2>Q6. Str_len()</h2>
        <p><?php if(isset($_POST['submit5'])){ echo  $strlen;}?></p>
        <form class="form" action="" method="post">
          <td>total length find</td>
            <input type="text" name="txt5" required>
            <button type="submit5" name="submit5">Generator</button>
</form>
</div>
<div class="wrapper6">
        <h2>Q7. Strcasecmp()</h2>
        <p><?php if(isset($_POST['submit6'])){ echo  $strcasecmp;}?></p>
        <form class="form" action="" method="post">
        <td>enter string comp equla or not</td>
            <input type="enter string" name="txt6" required>
            <td>enter string comp equla or not</td>  
            <input type="enter string" name="txt_6" required>
            <button type="submit6" name="submit6">Generator</button>
</form>
</div>
<div class="wrapper7">
        <h2>Q8. Strrpos()</h2>
        <p><?php if(isset($_POST['submit7'])){ echo  $strrpos;}?></p>
        <form class="form" action="" method="post">
        <td>enter_string</td>
            <input type="enter_string" name="txt7" required>
            <td>check number of place</td>
            <input type="check_place" name="txt_7" required>
            <button type="submit7" name="submit7">Generator</button>
</form>
</div>
<div class="wrapper8">
        <h2>Q9. Substr()</h2>
        <p><?php if(isset($_POST['submit8'])){ echo  $substr;}?></p>
        <form class="form" action="" method="post">
        <td>enter_string_text</td>
            <input type="enter_text" name="txt8" required>
            <td>enter_number</td>
            <input type="enter_number" name="txt_8" required>
            <button type="submit8" name="submit8">Generator</button>
</form>
</div>
<div class="wrapper9">
        <h2>Q10. strtolower()</h2>
        <p><?php if(isset($_POST['submit9'])){ echo  $strtolower;}?></p>
        <form class="form" action="" method="post">
        <td>enter_string convert lower</td>
            <input type="text" name="txt9" required>
            <button type="submit9" name="submit9">Generator</button>
</form>
</div>
<div class="wrapper10">
        <h2>Q11. Bintohex()</h2>
        <p><?php if(isset($_POST['submit10'])){ echo  $Bintohex;}?></p>
        <form class="form" action="" method="post">
        <td>enter_bin2hex</td>
            <input type="text" name="txt10" required>
            <button type="submit10" name="submit10">Generator</button>
</form>
</div>
<div class="wrapper11">
        <h2>Q12. Chop()</h2>
        <p><?php if(isset($_POST['submit11'])){ echo  $chop;}?></p>
        <form class="form" action="" method="post">
            <td>enter_text</td>
            <input type="enter_text" name="txt11" required>
            <td>enter_remove_text</td>
            <input type="enter_print_text" name="txt11" required>
            <button type="submit11" name="submit11">Generator</button>
</form>
</div>

</body>
</html>