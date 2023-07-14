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
		<% if RelatedPages %>
		<h3>Related Pages</h3>
			<ul>
				<% loop RelatedPages %>
					<li>
						<a href="$Link">$Title</a>
					</li>
				<% end_loop %>
			</ul>
		<% end_if %>
	  </div>
	</div>
</div>
			