<div class="article wf-section">
	<div class="article-list">
	<% if ParentID > 0 %>
		<a class="article-back" href="$Parent.Link">Back to $Parent.Title</a>
	<% end_if %>
	  <div class="section-title-block"><img src="$ThemeDir/images/section-header-bitcoin.svg" loading="lazy" alt="">
	    <h1 class="section-title">$Title</h1>
	  </div>

	  <div class="article-list-inner">
	    <div class="content">$Content</div>
		<% include SideBar %>	
		<iframe height="$Height" width="100%" frameBorder="0" src="$Src" style="$Styles"></iframe>
	  </div>
	</div>

</div>
			