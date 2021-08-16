<?php 
$name_share=$_GET['name'];
$name = ucwords(str_replace("_"," ",$name_share));
if($name){
$url_Encode = preg_replace('/\s+/', '_', $name);
$url="https://example.com/happy-independence-day?name=$url_Encode";
}else{
$url="https://example.com/happy-independence-day";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="canonical" href="https://example.com/happy-independence-day">
    <title>Happy Independence Day - <?php echo $name; ?>
    </title>
</head>
<body>
<div class="img">
<div class="container mt-4 text-center d-flex flex-column align-items-center middle" id="container">
<h4>
<?php
$Wish_Message='<h4 class="my-4 wish text-light bounce"> Wishes You a very </h4><h4 class="my-4 wish text-light bounce"> <span class="Saffron">Happy 75th</span> <span class="white">Independence</span> <span class="green">Day</span><h4>';
if ($name==null)
echo '<h4 class="wish" style="color: white; top:30%; position: absolute;">Please enter your name to continue</h4>';
?>
<?php echo '<h4 class="my-4 name bounce">'.$name.'<h4>'; ?>
<?php if (!empty($name)) {echo "$Wish_Message";} ?>
</h4>
<div class="button-container container" style="position: fixed; bottom: 0;">
<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#SubmitName">Wish Now</button>
<a class="btn btn-success btn-lg btn-block" href="whatsapp://send?text=<?php echo("*$name* Wishes you a very Happy Independence Day 🇮🇳 🇮🇳. Click Now to view: $url"); ?>"><i class="fab fa-whatsapp"></i> &nbsp; Share</a>
</div>
</div>
<div class="modal fade" id="SubmitName" tabindex="-1" role="dialog" aria-labelledby="SubmitNameTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Your Name Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="GET">
        <input type="text" class="form-control" placeholder="First Name" name="name">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</body>

</html>
