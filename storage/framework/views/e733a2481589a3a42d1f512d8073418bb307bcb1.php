<?php $__env->startSection('content'); ?>
<div class="container messenger">
    <div class="row">
  
      <div id="messageArea">
         <div class="messages col-md-6 col-sm-12 col-xl-3"" id="chat" >
         </div>
         <form action="" id="messageForm" name="messageForm">
            <textarea  class="form-control main-message" id="message" type=
               "text" autocomplete="off"></textarea><button id="send_message" class="send-main" value="Send Message">S</button>
         </form>

      </div>  

    </div>

<!-- 
        <div class="usersOnline col-md-6 col-sm-12 col-xl-3 hidden-sm">
            <h6>
               Online Users
            </h6>
            <ul class="row" id="users">
            </ul>
         </div>
    </div> -->
 <script type="text/javascript">
      

        $(function() {
  
                var socket = io.connect('http://192.168.0.10:3000');
                // injection
                var $messageForm  = $('#messageForm');
                var $message  = $('#message');
                var $chat  = $('#chat'); 
                var $messageArea = $('#messageArea'); 
                var $users = $('#users');
                // user config
                var $username = '<?php echo e(Auth::user()->name); ?>';   
                socket.emit('new user', $username);
                console.log($username);

                $messageForm.submit(function(e){
                  e.preventDefault(); 
                  socket.emit('send message', $message.val());
                  $message.val('');
                });
                socket.on('new message', function(data){
                  $chat.append('<div class="row single_message"><div class="user_data"><img class="avatar"  src="https://cdn.shopify.com/s/files/1/0843/2781/products/RapMask_Mark-Zuckerberg_Excited_9Width_Standard_grande.png"/><div class="user_post">'+ data.user +'<\/div><div class="secondary_data"><ul><li>Age: 26</li><li>Location: Bucharest</li><li>Sex: Male</li></ul></div></div><div class="transmission">' + data.msg + '<\/div><\/div>');
                  playAudio(); 
                });
 
                socket.on('get users', function(data){
                  var usersOnline = ''; 
                  for(i = 0; i < data.length; i++) {
                    usersOnline += '<li class="list-group-item user_is_online"><img class="avatar" src="https://cdn.shopify.com/s/files/1/0843/2781/products/RapMask_Mark-Zuckerberg_Excited_9Width_Standard_grande.png"/>'+ data[i] +'<\/li>'; 
                  }
   
                  $users.html(usersOnline);
                });
               
               });
  // Chat audio pop    
   var ding = document.getElementById("myAudio");
   function playAudio() { 
   ding.play(); 
   };

$(document).keypress(function(e) {
  if(e.which == 13) {
    // enter pressed
    console.log('O sugi in kek');
    $('#send_message').submit();
  }
});


 </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>