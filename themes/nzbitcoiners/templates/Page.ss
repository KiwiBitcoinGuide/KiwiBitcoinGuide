<!DOCTYPE html>

<!--[if !IE]><!-->
<html lang="$ContentLocale">
<!--<![endif]-->
<!--[if IE 6 ]><html lang="$ContentLocale" class="ie ie6"><![endif]-->
<!--[if IE 7 ]><html lang="$ContentLocale" class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html lang="$ContentLocale" class="ie ie8"><![endif]-->
<head>
	<% base_tag %>
	<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta content="<% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %>" property="og:title">
	<meta content="$MetaDescription" property="og:description">
	<meta content="$PagePreviewImage.AbsoluteURL" property="og:image">
	<meta content="<% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %>" property="twitter:title">
	<meta content="$MetaDescription" property="twitter:description">
	<meta content="$PagePreviewImage.AbsoluteURL" property="twitter:image">
	<meta property="og:type" content="website">

	$MetaTags(false)
	<% require themedCSS('normalize') %>
	<% require themedCSS('components') %>
	<% require themedCSS('nz-bitcoiners') %>
	<!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
	<link href="$ThemeDir/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
	<link href="$ThemeDir/images/webclip.png" rel="apple-touch-icon" />

</head>
<body class="body">
	
	<% include Header %>
	<div class="main" role="main">
		<div class="inner typography line">
			$Layout
		</div>
	</div>
	<% include Footer %>


</body>
</html>
