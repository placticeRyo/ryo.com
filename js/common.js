$(function(){
  var windowH = $(window).height();
  var headerH = $("#header").height();
  var footerH = $("#footer").height();
  var contentH = windowH - footerH - headerH;


  $(function(){
    $("#main").backstretch([
      "./image/image1.jpeg",
      "./image/image2.jpeg",
      "./image/image3.jpeg",
      "./image/image4.jpeg"
    ], {duration : 3000, fade: 2000
    });
  });

});