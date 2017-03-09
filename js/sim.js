$(document).ready(function() {
$("#result-msg").hide();	      
$("#tdt_form").submit(function(e) {
$("#result-msg").show();
$("#result-msg").html("<b>Sim đang nhập văn bản...</b>");
var postData = $(this).serializeArray();
var formURL = $(this).attr("action");
$.ajax({
url : formURL,
type: "POST",
data : postData,
success:function(data, textStatus, jqXHR) 
{
$("#print").html('');
$(data).insertAfter($("#print"));
$("#input").val('');
$("#result-msg").hide();},
error: function(jqXHR, textStatus, errorThrown){
$("#result-msg").html('<div class="alert alert-error">Sim chết rồi ạ...</div>');}});
e.preventDefault();
e.unbind();
$("#result-msg").hide();
$("#tdt_form").submit();});   
$("#result-msg").hide();});
$(document).ready(function() {
$("#result-2").hide();
$("#result-msg-2").hide();
$("#tdt_set").click(function() {
$("#result-msg-2").show();$("#tdt_form_2").submit(function(e) {
$("#result-msg-2").html("<b>Đang dạy sim chờ tí...</b>");
var postData = $(this).serializeArray();
var formURL = "/sim/sever.php";
$.ajax({
url : formURL,
type: "POST",
data : postData,
success:function(data, textStatus, jqXHR) {
$("#result-2").show();
$('<p>'+data+'</p>').insertAfter($("#print-2"));
$("#result-msg-2").hide();},
error: function(jqXHR, textStatus, errorThrown){
$("#result-msg-2").html('<div class="alert alert-error">Sim không thể học được...</div>');}});
e.preventDefault();
e.unbind();
$("#result-msg-2").hide();});
$("#tdt_form_2").submit();});
$("#result-msg-2").hide();});