<html>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
<input type="text" name="name1" 
             maxlength="30" />
             <input type="submit" value="submit">
             </form>
             <?PHP
             $name=$_POST["name1"];
             echo "$name";
             ?>

</body>>

</html>