@extends('layouts.app')

@section('content')
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
   

 </script>
@endsection
