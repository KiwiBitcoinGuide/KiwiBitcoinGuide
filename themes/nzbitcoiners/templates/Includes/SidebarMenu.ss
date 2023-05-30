<%--Include SidebarMenu recursively --%>
<% if LinkOrSection = section %>
	<% if $Children %>
		<% loop $Children %>
			<div class="article-list-inner">
				<a href="$Link" class="article-link $LinkingMode" title="Go to the $Title.XML page">
					$MenuTitle.XML
				</a>
				<% if $Children %>
					<ul>
						<% include SidebarMenu %>
					</ul>
				<% end_if %>
		<% end_loop %>
	<% end_if %>
<% end_if %>
