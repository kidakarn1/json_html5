$(document).ready(function(){
manageData();
function manageData(){
  $.ajax({
      dataType:"json",
      url:"create.php"
  }).done(function(data){
        manageRow(data.data);
    });
  }
  function manageRow(data){
    var rows = "";
    $.each(data,function(key,value){
        rows +="<tr>"+
              "<td>"+value.title+"</td>"+
              "<td>"+value.description+"</td>"+
              "<td data-id='"+value.id+"'>"+
                    "<button data-toggle='modal' data-target='#edit_item'"+
                       "class ='btn btn-primary edit-item'>"+
                       "edit</button>"+
              "<button class='btn btn-danger remove-item'>"+
                      "Delete</button>"+
              "</td></tr>";
    });
    $("tbody").html(rows);
  }
});
