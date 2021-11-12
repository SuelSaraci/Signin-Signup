const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});


$(function() {
	const userData = [
		{
			id: "1111",
			name: "Suel Saraçi",
			age: 18,
			address: "Qafa"
		},
		{
			id: "2222",
			name: "Artan Kastrati",
			age: 22,
			address: "Dragodan"
		},
		{
			id: "3333",
			name: "Bleon Mazreku",
			age: 19,
			address: "Tophane"
		}
	];
	let clientNumber = $("#userID"),
		clientName = $("#userName"),
		clientAge = $("#userAge"),
		clientAddress = $("#userAddress");
  
	function clientUser(){
		let html = "";
		$.each(userData, function(i, user){
			html += '${user.id}';
		});
	  clientNumber.html(html);
	}
	clientUser();
	
	function fillClientData(sid){
		$.each(userData, function(i, user){
			if( user.id == sid ){
				clientName.val(user.name);
				clientAge.val(user.age);
				clientAddress.val(user.address);
			}
		});
	}
	
	clientNumber.on("input change paste", function(){
		let id = clientNumber.val();
		fillClientData(id);
	});
});




$(document).ready(function (e) {

    let $uploadfile = $('#register .upload-profile-image input[type="file"]');

    $uploadfile.change(function () {
        readURL(this);
    });

});

function readURL(input) {
    if(input.files && input.files[0]){
        let reader = new FileReader();
        reader.onload = function (e) {
            $("#register .upload-profile-image .img").attr('src', e.target.result);
            $("#register .upload-profile-image .camera-icon").css({display: "none"});
			//alert('Image Upload Completed');
        }

        reader.readAsDataURL(input.files[0]);

    }
}





  