<nav role="navigation" class="nav-menu w-nav-menu">
	<% if $Top.ElementalArea.ElementControllers %>
	    <% loop $Top.ElementalArea.ElementControllers %>
		   <a href="#$Title" class="nav-link w-nav-link">$Title</a>
	    <% end_loop %>
	<% end_if %>

	<% loop $Menu(1) %>
		<a href="#$Link" class="nav-link w-nav-link">$MenuTitle.XML</a>
		<%--<li class="$LinkingMode"><a href="$Link" title="$Title.XML">$MenuTitle.XML</a></li>--%>
	<% end_loop %>
</nav>