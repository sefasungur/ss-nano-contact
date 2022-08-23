<?php if(sncOption("snc-active") == "enabled") : ?>
<div class="snc-wrapper <?php echo (sncOption("snc-default-class") != "") ? sncOption("snc-default-class") : "ss-nano-contact";?> <?php echo sncOption("snc-position");?> <?php echo sncOption("snc-location-horizontal");?> <?php echo sncOption("snc-location-vertical");?>">
    <?php if(count(sncOption("buttons")) > 0) : ?>
    <ul>
    <?php foreach(sncOption("buttons") as $button) : ?>
        <li class="<?php echo sncOption("snc-position-vh");?>">
            <a style="background: <?php echo $button["background-color"];?>; color: <?php echo $button["icon-color"];?>" <?php echo ($button["blank-page"] == 1) ? "target='_blank'" : "";?> href="<?php echo  esc_url($button["url"]);?>" title="<?php echo $button["title"];?>">
                <span><i class="<?php echo $button["icon"];?>"></i></span>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</div>
<?php endif; ?>