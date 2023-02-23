<nav role="navigation" class="nav-menu w-nav-menu">
	<% loop $Menu(1) %>
		<a href="#$Link" class="nav-link w-nav-link">$MenuTitle.XML</a>
		<%--<li class="$LinkingMode"><a href="$Link" title="$Title.XML">$MenuTitle.XML</a></li>--%>
	<% end_loop %>
</nav>