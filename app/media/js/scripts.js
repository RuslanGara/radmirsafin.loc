
$(document).ready(function () {

    setTimeout(function(){
        $('#black1').show(1000);
    }, 1000);
    setTimeout(function(){
        $('#black1').hide(1000);
    }, 4000);


    setTimeout(function(){
        $('#black2').show(1000);
    }, 5000);
    setTimeout(function(){
        $('#black2').hide(1000);
    }, 8000);


    setTimeout(function(){
        $('#black3').show(1000);
    }, 9000);
    setTimeout(function(){
        $('#black3').hide(1000);
    }, 12000);


    setTimeout(function(){
        $('#black4').show(1000);
    }, 13000);
    setTimeout(function(){
        $('#black4').hide(1000);
    }, 16000);


    setTimeout(function(){
        $('#black5').show(1000);
    }, 17000);
    setTimeout(function(){
        $('#black5').hide(1000);
    }, 20000);


setTimeout(function(){
        $('#blackfinish').show(1000);
    }, 21000);


        $("#myModalBox").modal('show');



});



//
// $(document).ready(function () {
//
//
//
//   //  elem.style.height=481+"px";
//
//
//
// });



// просмотр блока по ID
// function viewdiv(id) {
// $("#jivo-iframe-container").attr("style", "height: 481px !important;");
//     var el = document.getElementById(id);
//     var link = document.getElementById('toggleLink');
//     if (el.style.display == "block") {
//         el.style.display = "none";
//         link.innerText = link.getAttribute('data-text-hide');
//     } else {
//         el.style.display = "block";
//         link.innerText = link.getAttribute('data-text-show');
//     }
// };