<% with $SiteConfig %>
    <% if $FacebookURL || $TwitterURL || $LinkedInURL || $InstagramURL || $YouTubeURL || $VimeoURL %>
        <ul class="basic-social-media list-unstyled list-inline" aria-label="Social Media">
            <% if $FacebookURL %><li class="list-inline-item"><a href="$FacebookURL" target="_blank" rel="noopener" aria-label="Follow us on Facebook"><i class="fab fa-facebook-square fa-3x"></i></a></li><% end_if %>
            <% if $TwitterURL %><li class="list-inline-item"><a href="$TwitterURL" target="_blank" rel="noopener" aria-label="Follow us on Twitter"><i class="fab fa-twitter fa-3x"></i></a></li><% end_if %>
            <% if $LinkedInURL %><li class="list-inline-item"><a href="$LinkedInURL" target="_blank" rel="noopener" aria-label="Connect with us on LinkedIn"><i class="fab fa-linkedin fa-3x"></i></a></li><% end_if %>
            <% if $InstagramURL %><li class="list-inline-item"><a href="$InstagramURL" target="_blank" rel="noopener" aria-label="Follow us on Instagram"><i class="fab fa-instagram fa-3x"></i></a></li><% end_if %>
            <% if $YouTubeURL %><li class="list-inline-item"><a href="$YouTubeURL" target="_blank" rel="noopener" aria-label="Subscribe on YouTube"><i class="fab fa-youtube fa-3x"></i></a></li><% end_if %>
            <% if $VimeoURL %><li class="list-inline-item"><a href="$VimeoURL" target="_blank" rel="noopener" aria-label="Subscribe on Vimeo"><i class="fab fa-vimeo fa-3x"></i></a></li><% end_if %>
        </ul>
    <% end_if %>
<% end_with %>