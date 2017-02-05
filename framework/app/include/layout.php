<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>
    $(function(){
       $('.action').on('click', function(){
           var id = $(this).attr('id');
           var secret = "<?php echo $_SESSION['secret']; ?>";
           $.ajax({
               url: "/action",
               method: "post",
               data: "action="+id+"&secret="+secret,
               success: function(data){
                    data = JSON.parse(data);
                    $('#'+data.object).remove();
                   alert(data.text);
               }
           });
           return false;
       });
    });
</script>