<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success, Your document will be printed shortly.";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <head>
      <title>tHe pRinTEr</title>
   </head>
   <body>
      <form name="upload" action="" method="POST" enctype="multipart/form-data">
        <label for="upload">Upload a file to print</label><br>
	<input type="file" name="image"><br><br>
	<label for="printer">Choose a printer: </label>

	<select name="printer" id="printer" required>
		<option value="" disabled selected>Select your printer</option>
		<option value="arad">Arad printer</option>
		<option value="Hotzla">Hotzla printer</option>
		<option value="shatz">Shatz printer</option>
	</select><br>

	<label for="number">Number of copies: </label>
	<input type="number" list="numbers" min="1" max="99">
	<datalist id="numbers">
		<option value="1">
                <option value="1">
                <option value="2">
                <option value="3">
                <option value="4">
                <option value="5">
                <option value="6">
                <option value="7">
                <option value="8">
                <option value="9">
                <option value="10">
                <option value="11">
                <option value="12">
                <option value="13">
                <option value="14">
                <option value="15">
                <option value="16">
                <option value="17">
                <option value="18">
                <option value="19">
                <option value="20">
                <option value="21">
                <option value="22">
                <option value="23">
                <option value="24">
                <option value="25">
                <option value="26">
                <option value="27">
                <option value="28">
                <option value="29">
                <option value="30">
                <option value="31">
                <option value="32">
                <option value="33">
                <option value="34">
                <option value="35">
                <option value="36">
                <option value="37">
                <option value="38">
                <option value="39">
                <option value="40">
                <option value="41">
                <option value="42">
                <option value="43">
                <option value="44">
                <option value="45">
                <option value="46">
                <option value="47">
                <option value="48">
                <option value="49">
                <option value="50">
                <option value="51">
                <option value="52">
                <option value="53">
                <option value="54">
                <option value="55">
                <option value="56">
                <option value="57">
                <option value="58">
                <option value="59">
                <option value="60">
                <option value="61">
                <option value="62">
                <option value="63">
                <option value="64">
                <option value="65">
                <option value="66">
                <option value="67">
                <option value="68">
                <option value="69">
                <option value="70">
                <option value="71">
                <option value="72">
                <option value="73">
                <option value="74">
                <option value="75">
                <option value="76">
                <option value="77">
                <option value="78">
                <option value="79">
                <option value="80">
                <option value="81">
                <option value="82">
                <option value="83">
                <option value="84">
                <option value="85">
                <option value="86">
                <option value="87">
                <option value="88">
                <option value="89">
                <option value="90">
                <option value="91">
                <option value="92">
                <option value="93">
                <option value="94">
                <option value="95">
                <option value="96">
                <option value="97">
                <option value="98">
                <option value="99">
	</datalist><br>
	<input type="checkbox" name="colored"> - Colored<br>
        <input type="checkbox" name="two_sided"> - Two sided<br><br>
	<input type="submit"><br>
      </form>
   </body>
</html>
