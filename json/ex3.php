<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/jquery-3.3.1.min.js"></script>
  </head>
  <body>
      <input type="button" class="getjson" value="getjson">class
    <br>content<br>
    <div id="content"></div>
    <input type="text" name="get" disabled><br>
      <input type="text" id="get2" disabled>
  </body>
</html>
<script>
  var content ="test text";
  $(document).ready(function(){
    //if on click show data
    // $("input[name='getjson']").click(function(){
    //       $('#content').html(content);
    // });
    // $("#getjson").click(function(){
    //       $('#content').html(content);
    // });
    $(".getjson").click(function(){
      $.getJSON("ex2.php",function(jsonOBJ){
        content = "Name ="+jsonOBJ.firstname+"<br>";
        content += "LasrNAME ="+jsonOBJ.lastname+"<br>";
        content += "AGE ="+jsonOBJ.age+"<br>";
        $('#content').html(content);
        $("input[name='get']").val(jsonOBJ.firstname +" "+jsonOBJ.lastname);
        $("#get2").val(jsonOBJ.age );
      });
    });
  });
</script>
