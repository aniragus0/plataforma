<head>
		<script type="text/javascript" charset="utf-8">
/*global optionValues*/
(function () {
	var params, url;

	optionValues = {
		min: false,
		jquery: "1.4.2",
		theme: "default"
	};
	params = window.location.search;

	function css(src) {
		document.write('<link rel="stylesheet" href="' + src + '" type="text/css" />');
	}

	function script(src) {
		document.write('<script src="' + src + '" type="text/javascript" charset="utf-8"></sc' + 'ript>');
	}

	if (params) {
		params = params.substr(1).split('&');

		for (i = 0; i < params.length; i ++) {
			var equals = params[i].split('=');
			
			if (Object.prototype.hasOwnProperty.call(optionValues, equals[0])) {
				optionValues[equals[0]] = equals[1];
			}
		}
	}


	css('./themes/' + optionValues.theme + '/css/uniform.' + optionValues.theme + '.css');

	url = '://ajax.googleapis.com/ajax/libs/jquery/'

	if (window.location.protocol == 'https:') {
		url = 'https' + url;
	} else {
		url = 'http' + url;
	}

	url += optionValues.jquery;

	if (optionValues.min) {
		url += '/jquery.min.js';
	} else {
		url += '/jquery.js';
	}

	script(url);

	if (optionValues.min) {
		script('js/jquery.uniform.min.js');
	} else {
		script('js/jquery.uniform.js');
	}
}());
		</script>
		<script type="text/javascript">
// Can't merge with previous script block since this relies on jQuery and that
// was not loaded until the previous script block ends
$(function () {
	var $min, $remove, $apply, $uniformed;

	// Debugging code to check for multiple click events
	$selects = $("select").click(function () {
		if (typeof console !== 'undefined' && typeof console.log !== 'undefined') {
			console.log($(this).attr('id') + " clicked");
		}
	});

	$uniformed = $(".styleThese").find("input, textarea, select, button, a.uniformTest").not(".skipThese");
	$uniformed.uniform();

	$("#optionsForm input, #optionsForm select").change(function () {
		this.form.submit();
	});

	if (optionValues.min) {
		$min = $("#optionsMin");

		if ($min.prop) {
			$min.prop("checked", true);
		} else {
			$min.attr("checked", "checked");
		}
	}

	$("#optionsJquery").val(optionValues.jquery);
	$("#optionsTheme").val(optionValues.theme);
	$("#jqueryCurrentVersion").text("Using " + jQuery.fn.jquery);
	$remove = $("#remove");
	$apply = $("#apply");
	$remove.click(function () {
		$uniformed.uniform.restore();
		$remove.hide();
		$apply.show();
		return false;
	});
	$apply.click(function () {
		$uniformed.uniform();
		$apply.hide();
		$remove.show();
		return false;
	});
});
		</script>
		<style type="text/css" media="screen">
			body {
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				color: #666;
				padding: 40px;
			}
			h1 {
				margin-top: 0;
			}
			label {
				font-size: 10px;
				font-weight: bold;
				text-transform: uppercase;
				display: block;
				margin-bottom: 3px;
				clear: both;
			}
			.error {
				background-color: #FF8080;
			}
			.hide {
				display: none;
			}
		</style>