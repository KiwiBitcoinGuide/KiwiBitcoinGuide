<div id="$MenuTitleAtt" class="section wf-section">
  <div class="section-inner">
    <div class="section-title-block"><img src="$ThemeDir/images/section-header-bitcoin.svg" loading="lazy" alt="">
      <h1 class="section-title">$Title</h1>
    </div>
    <div class="section-description">
      <div>$Text</div>
    </div>
      <div class="nzmade-list">
        <% loop Projects %>
          <div class="nzmade-item">
            <div class="nzamade-image-container">
              <img src="$Image.URL" loading="lazy" alt="" sizes="(max-width: 479px) 17vw, 18vw" srcset="$Image.scaleWidth(500).URL 500w, $Image.scaleWidth(800).URL 800w, $Image.scaleWidth(1080).URL 1080w, $Image.scaleWidth(1100).URL 1100w" class="nzmade-image"></div>
            <div class="nzmade-text">
              <h4 class="nzmade-title"><strong>$Title</strong></h4>
              <div class="nzmade-description">$Text</div>
              <a href="$Link" target="_blank" class="more-link w-inline-block">
                <div class="more-link-text">Find Out More</div>
              </a>
            </div>
          </div>
        <% end_loop %>
      </div>
    </div>
  </div>
</div>