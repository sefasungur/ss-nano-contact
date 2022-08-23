<?php if(sncOption("snc-active") == "enabled") : ?>
<div class="snc-wrapper <?php echo esc_html((sncOption("snc-default-class") != "") ? sncOption("snc-default-class") : "ss-nano-contact");?> <?php echo esc_html(sncOption("snc-position"));?> <?php echo esc_html(sncOption("snc-location-horizontal"));?> <?php echo esc_html(sncOption("snc-location-vertical"));?>">
    <?php if(count(sncOption("buttons")) > 0) : ?>
    <ul>
    <?php foreach(sncOption("buttons") as $button) : ?>
        <li class="<?php echo esc_html(sncOption("snc-position-vh"));?>">
            <a style="background: <?php echo $button["background-color"];?>; color: <?php echo $button["icon-color"];?>" <?php echo esc_html(($button["blank-page"] == 1) ? "target='_blank'" : "");?> href="<?php echo esc_url($button["url"]);?>" title="<?php echo esc_html($button["title"]);?>">
                <span><i class="<?php echo esc_html($button["icon"]);?>"></i></span>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</div>
<?php endif; ?>