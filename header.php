<?php
 /* header template */

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<!-- Begin Body -->
<body>
 
    <header>
        <nav id="header" class="navbar">
            <div class="container">
                <a class="" href="https://www.stylumia.com">
                    <img class="big" itemprop="logo" src="https://www.stylumia.com/assets/images/stylumia_logo-big.png" alt="stylumia-logo" height="56px">
                    <img class="small" itemprop="logo" src="https://www.stylumia.com/assets/images/stylumia_logo-small.png" alt="stylumia-logo" height="26px">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="https://www.stylumia.com/products">What We Offer</a></li>   
                    <li><a href="https://www.stylumia.com/about-us">Who We Are</a></li>   
                    <li><a href="#" class="sl-small nomar">Sales +91 95828 05661</a></li>
                    <li><a class="btn" href="https://www.stylumia.com/get-a-demo">Free Trial</a></li>
                    <li class="search">
                        <span id="search-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                        <?php echo do_shortcode('[display_search_form]');?>
                    </li>
                </ul>            
            </div>
        </nav>
    </header>