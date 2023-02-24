<nav role="navigation" class="nav-menu w-nav-menu">
	<%-- if $Top.ElementalArea.ElementControllers %>
	    <% loop $Top.ElementalArea.ElementControllers %>
	    	<% if $MenuTitle %>
				<a href="#$MenuTitle" class="nav-link w-nav-link">$MenuTitle</a>
			<% end_if %>
	    <% end_loop %>
	<% end_if --%>

	<% loop $Menu(1) %>
		<a href="$Link" class="nav-link w-nav-link">$MenuTitle.XML</a>
		<%--<li class="$LinkingMode"><a href="$Link" title="$Title.XML">$MenuTitle.XML</a></li>--%>
		 <% loop $ElementalArea.ElementControllers %>
	    	<% if $MenuTitle && not First %>
				<a href="$Up.Up.Link#$MenuTitleAtt" class="nav-link w-nav-link">$MenuTitle</a>
			<% end_if %>
	    <% end_loop %>
	<% end_loop %>
</nav>