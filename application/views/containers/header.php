<div id="Top_bar">
                <div class="one">
                    <div class="top_bar_left">
                        <!-- Logo-->
                        <div class="logo">
                            <h1><a id="logo" href="<?php echo MAIN; ?>Profile" title="BeBook - BeTheme"><img class="scale-with-grid" src="<?php echo IMAGE; ?>logo.png" alt="BeBook - BeTheme" /></a></h1>
                        </div>
                        <!-- Main menu-->
                        <div class="menu_wrapper">
                            <nav id="menu">
                                <ul id="menu-main-menu" class="menu">
                                    <li class="<?php echo $subview=="profile"?"current_page_item":"" ?>">
                                        <a href="<?php echo MAIN; ?>Profile"><span><i style="font-size: 80%;" class="icon-book-open"></i> Profile</span></a>
                                    </li>
                                    <li class="<?php echo $subview=="profile"?"current_page_item":"" ?>">
                                        <a href="<?php echo MAIN; ?>Login/out"><span><i style="font-size: 80%;" class="icon-book-open"></i> Log Out</span></a>
                                    </li>
                                    
                                </ul>
                            </nav>
                            <a class="responsive-menu-toggle" href="#"><i class='icon-menu'></i></a>
                        </div>
                        <!-- Header Searchform area-->
                        <div class="search_wrapper">
                            <form method="get" action="#">
                                <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                                <input type="text" class="field" name="s" placeholder="Enter your search" />
                                <input type="submit" class="submit flv_disp_none" value="" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>