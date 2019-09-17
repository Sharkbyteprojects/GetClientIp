setInterval(function(){
if(document.location.hash == "#private"){
    priva();
}else if(document.location.hash == "#public"){
    pubi();
}else{
    document.location.hash = "public";
} }, 500);
$("#gui").slideUp(1);
function guid(){
document.location.hash = "private";
}
function guiri(){
document.location.hash = "public";
}
function pubi(){
    $("#gui").slideUp(6000);
$("#ico").slideDown(6000);
}
function priva(){
    $("#ico").slideUp(6000);
$("#gui").slideDown(6000);
}