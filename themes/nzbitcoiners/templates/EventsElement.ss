<div id="meetups" class="section wf-section">
  <div class="section-inner">
    <div class="section-title-block"><img src="$ThemeDir/images/section-header-bitcoin.svg" loading="lazy" alt="">
      <h1 class="section-title">$Title</h1>
    </div>
    <div class="section-description">
      <div>$Text</div>
    </div>
    <div class="meetup-container">
      <div class="meetup-image-container"><img src="$Image.URL" loading="lazy" sizes="(max-width: 991px) 84vw, 100vw" srcset="$Image.scaleWidth(500).URL 500w, $Image.scaleWidth(800).URL 800w, $Image.scaleWidth(1080).URL 1080w, $Image.scaleWidth(1100).URL 1100w" alt="Bitcoin meetup" class="rounded-image"></div>
      <div class="meetup-list">
        <h3>Coming Up</h3>
        <% if Events %>
          <% loop Events.sort('Date ASC') %>
          <div class="meetup-upcoming-item">
            <div class="meetup-upcoming-item-detail">
              <h4 class="meetup-event-title">$Title</h4>
              <div class="meetup-upcoming-text">$Date.Format('MMM dd, yyyy')<br></div>
              <a href="$LocationLink" target="_blank" class="meetup-upcoming-text meeting-upcoming-venue">$Location</a>
              <div class="meetup-upcoming-text">$Date.Format('hh:mm a') Onwards<br></div>
            </div>
            <a href="$Link" target="_blank" class="meetup-upcoming-item-go w-inline-block"><img src="$ThemeDir/images/go.svg" loading="lazy" alt=""></a>
          </div>
          <% end_loop %>
          <% else %>
          <p>No upcoming events right now, stay tuned!</p>
        <% end_if %>
      </div>
    </div>
  </div>
</div>