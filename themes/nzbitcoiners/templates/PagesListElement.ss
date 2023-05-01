<div id="articles" class="section wf-section">
  <div class="section-inner">
    <div class="section-title-block"><img src="$ThemeDir/images/section-header-bitcoin.svg" loading="lazy" alt="">
      <h1 class="section-title">Articles &amp; Guides</h1>
    </div>
    <div class="article-preview-container">
      <% loop LinkedPages %>
        <div class="article-preview-item">
          <div class="article-preview-meta">
            <h3 class="article-preview-header">$Title</h3>
            <div class="article-preview-description">$Summary</div>
          </div>
          <a href="$Link" class="article-preview-go w-inline-block">
            <img src="$ThemeDir/images/go.svg" loading="lazy" alt="">
          </a>
        </div>
      <% end_loop %>
    </div>
  </div>
</div>