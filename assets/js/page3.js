$(function() {
  $("#asyncReq").click(function() {
    $.post(Config.url + "usecase1/asyncreq",
    {
        name: "Example name"
    },
    function(data, status){
      $("#asyncReqRes").html(data.msg);
    });
  });
});
