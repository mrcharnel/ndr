<html>


<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="jquery.jeditable.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">

$(function() {
  $(".editable_textarea").editable("http://www.appelsiini.net/projects/jeditable/php/save.php", {
      indicator : "<img src='img/indicator.gif'>",
      type   : 'textarea',
      submitdata: { _method: "put" },
      select : true,
      submit : 'OK',
      cancel : 'cancel',
      cssclass : "editable"
  });


});
</script>



</head>

<body>



    <p class="editable_textarea" id="paragraph_1">tet</p>





</body>
</html>
