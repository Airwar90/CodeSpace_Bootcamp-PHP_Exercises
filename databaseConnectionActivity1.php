<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>



<body>
<form action="create_record.php" method="post">
<input type="text" name="id" class="form-control"  
value="<?php if (isset($_POST['id'])) echo $_POST['id']; ?> ">

<?php
# Connect  on 'localhost' 'practice' .
$link = mysqli_connect('localhost','root','root','practice'); 
if (!$link) { 
# Otherwise fail gracefully and explain the error. 
	die('Could not connect to MySQL: ' . mysqli_error()); 
} 
echo 'Connection OK';  
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
#Further PHP statements to be added here.
require ('connect_db.php');
$errors = array();

# Check for a ID.
if ( empty( $_POST[ 'id' ] ) )
  { $errors[] = 'Enter ID Number' ; }
else
  { $id = mysqli_real_escape_string( $link, trim( $_POST[ 'id' ] ) ) ; }
# Check for first_name
if ( empty( $_POST[ 'first_name' ] ) )
  { $errors[] = 'Enter First Name' ; }
else
  { $id = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; }
# Check for last_name
if ( empty( $_POST[ 'last_name' ] ) )
  { $errors[] = 'Enter Last Name' ; }
else
  { $id = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; }

# Check if email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT id FROM my_table WHERE id='$id'" ;
    $r = @mysqli_query ( $link, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) $errors[ ] = 'User already registered.' ;
  }
# On success insert data into 'my_table' database table.
  if ( empty( $errors ) ) 
  {
    $q = "INSERT INTO my_table (id, first_name, last_name, ) 
VALUES ('id','$fn', '$ln')";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    { echo '<p>Record added successfully</p> '; }
    # Close database connection.
    mysqli_close($link); 

  exit();}
}
# Or report errors.
  else 
  {
    echo '<p>The following error(s) occurred:</p>' ;
    foreach($errors as $msg )
    { echo " - $msg<br>" ; }
    echo '<p>or please try again.</p></div>';
    # Close database connection.
    mysqli_close( $link );
  } 
?>

</body>
</html>