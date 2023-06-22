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
		<iframe height="1000" frameBorder="0" src="https://btcmap.org/map#6/-41.57436/172.73804"></iframe>
	  </div>
	</div>

</div>
			