$(document).ready(function () {

	$(document).click(function(e) {

		//Clicked element
		var target = $(e.target);

		//User remove
		if (target.attr('class') === 'user-remove') {

            var userid = target.attr('id');

            console.log("Try to remove: " + userid);

			$.ajax({
			  url: 'template/remove-user.php',
			  data: { 'id': userid },
			  type: 'post',
			  success: function (result) {
			  	$(".user-list").load(location.href + " .user-list");
			  }
			});

		}

		//Create dropdown menu
		if ((target.parent().attr('class') == 'user') && (target.parent().find('td.id').html() != 'ID')) {

			$('.dropdown').remove();

			var userid = target.parent().find('td.id').html();
			var permission = (target.parent().find('td.permission').html() === "Admin");

			target.append('<div class="dropdown">' +
				'<div id="user-dropdown" class="dropdown-content">' +
				'<p class="user-remove" id="' + userid + '">Remove user</p>' +
				'<p class="user-setpermission"  id="' + userid + '">Set as ' + ((permission == false) ? "Admin user" : "Normal user")  + ' </p>' +
				'</div></div>');

		} else {
			$('.dropdown').remove();
		}

	});


});