<div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section" style="padding-top:90px; padding-bottom:40px; background-color:#ebc175">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_fancy_heading">
                                        <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title">Kitap Ekle</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="padding-top:60px; padding-bottom:20px; background-color:#fff">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                  
                                    <div class="column one" style="text-align: center;">
                                     <form action="<?php echo MAIN; ?>Profile/book_adder" method='POST' enctype="multipart/form-data">
                                     <style>
                                        div.wrapper {
                                            position:  absolute;
                                            top : 200px;
                                            left: 300px;
                                            width: 300px;
                                            height:300px;
                                            border:1px solid black;
                                        }

                                        input[type="text"] {
                                             position: relative;
                                             display: block;
                                             margin : 0 auto;
                                        }

                                    </style>

                                     <h1>Kitap Adı</h1>
                                     <input type="text" name="Ad" class="form-control" placeholder="Kitap Adı" aria-describedby="basic-addon1" required style="vertical-align: center; margin-bottom: 25px;" >
                                     <h1>Kitap Yazarı</h1>
                                     <input type="text" name="Yazar" class="form-control" placeholder="Kitap Yazarı" aria-describedby="basic-addon1" required style="vertical-align: center; margin-bottom: 25px;" >
                                     <h1>Kitap Türü</h1>
                                     <input type="text" name="Tur" class="form-control" placeholder="Kitap Türü" aria-describedby="basic-addon1" required style="vertical-align: center; margin-bottom: 25px;">
                                     <h1>Kitap Yılı</h1>
                                     <input type="text" name="Yıl" class="form-control" placeholder="Kitap Yılı" aria-describedby="basic-addon1" required style="vertical-align: center; margin-bottom: 25px;">  
                                    <input type="submit" name="Ekle" value="Kitap Ekle" class="button" style="padding: 3px 6px; font-size: 20px;">
                                    </form>
                                        
                                    </div>

                                   
 

                                </div>
                            </div>
                        </div>
                        

                                                           
                        <div class="section the_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
