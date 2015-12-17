$(document).ready(function() {
	$("#contactForm").submit(function(event){
		// cancels the form submission
		event.preventDefault();
		alert('submit called');
		submitForm();
	});
})

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
 alert('submit called');
    $.ajax({
        type: "POST",
        url: "php/process.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                alert('success');
				formSuccess();
            }else
			alert('fail');
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}