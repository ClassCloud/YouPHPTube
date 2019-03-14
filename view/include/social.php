<?php
//set the $url and the $title before include this
$facebookURL = "https://www.facebook.com/sharer.php?u={$url}&title={$title}";
$twitterURL = "http://twitter.com/home?status={$title}+{$url}";
$streamzURL = "https://my.streamz.ca/share?text={$url}";
?>                                           
<ul class="social-network social-circle">
    <li><a href="<?php echo $facebookURL; ?>" target="_blank" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-square"></i></a></li>
    <li><a href="<?php echo $twitterURL; ?>" target="_blank"  class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
    <li><a href="<?php echo $streamzURL; ?>" target="_blank"  class="icoGoogle" title="Streamz +"><i class="fas fa-share-alt"></i></a></li>
</ul>
