(function() {}).call(this);
$(document).ready(function(){
$("#addFolderBtn").click(function(){
  let input=$("#inputFolderInput").val()
  $.ajax({
    url: "demo_test.txt",
    method:"post",
    data:{action:"addFolder",titleFolder : input},
     success: function(result){
    $("#div1").html(result);
  }});
})
});