<?php 

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$txt = fopen("txt/$name.txt","w");
fwrite($txt,'

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Message</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

 <div style="margin-top: 10%;"></div>

 <div class="ui one column stackable center aligned page grid">
   <div class="column">
     <div class="ui floating message">
       <div class="header">
         $name
       </div>
       <p>
         $message
       </p>
       <a href="mailto:$email">
         <div class="ui blue text">$email</div>
       </a>
     </div>
   </div>
 </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>



');
fclose($txt);

if (file_exists("txt/$name.txt")) {
  
  echo '
  
  <!DOCTYPE html>
  <html>
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Message submitted</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  
  <body>
  
  <div style="margin-top: 10%;"></div>
  
  <div class="ui one column stackable center aligned page grid">
     <div class="column">
         <div class="ui positive message">
           <div class="header">
             Your message is submitted
           </div>
           <p>
             Your message will be received of Jimwell and he will respond to your email address.
             <div>
               <button class="ui green simple button" onclick="history.back()">Back</button>
             </div>
             
           </p>
         </div>
     </div>
  </div>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  </body>
  
  </html>
  
  
  
  ';
}

?>
