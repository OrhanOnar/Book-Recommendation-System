<div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section" style="padding-top:90px; padding-bottom:40px; background-color:#ebc175">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_fancy_heading">
                                        <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title">Kitap Önerisi</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="padding-top:60px; padding-bottom:20px; background-color:#fff">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One Second (1/2) Column -->
                                    
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one">
                                        <div class="column_attr" style="text-align: center;">
                                            <h2 style="margin-bottom: 7px; margin-top: 15px;">Tüm Kitaplar</h2>
                                            <hr class="no_line hrmargin_b_20" />
                                        </div>
                                    </div>
                                    <div class="column one">
                                      
                                        <form action="http://localhost/bookstore/index.php/Profile/book_order" method='POST' enctype="multipart/form-data" style="text-align: center;">

                                          <input type="submit" name="Submit" value="Tüm Kategoriler" class="button" style="padding: 3px 6px; font-size: 15px;">
                                          <?php foreach ($categories as $category) { ?>
                                            <input type="submit" name="Submit" value="<?php echo $category['book_genre']; ?>" class="button" style="padding: 3px 6px; font-size: 15px;">
                                          <?php } ?>

                                        </form>
                                    </div>
                                    <!-- Page devider -->
                                    <!-- One full width row-->
                                    <div class="column one column_divider" style="margin-top: 50px;">
                                        <hr class="no_line" />
                                    </div>
                                    <div class="column one">
                                        
                                            <div class="fancy_heading fancy_heading_icon">

                                          <form action="<?php echo MAIN; ?>Profile/add_readed_book" method='POST' enctype="multipart/form-data"> 
                                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                            <thead>
                                              <tr>
                                                <th class="th-sm">#</th>
                                                <th class="th-sm">&nbsp;</th>
                                                <th class="th-sm">Rating</th>
                                                <th class="th-sm">Kitap Adı</th>
                                                <th class="th-sm">Kitap Yazarı</th>
                                                <th class="th-sm">Kitap Türü</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <?php $counter=1; ?>
                                                      <?php foreach ($reccs as $recc) { ?>
                                                      <tr>
                                                        <td><?php echo $counter; ?></td>
                                                          <td><input type="checkbox" name="<?php echo $recc['book_id']; ?>" /></td>
                                                          <td><input type="number" name="<?php echo $recc['book_id']; ?>R"></input></td>
                                                          <td><?php echo $recc['book_name']; ?></td>
                                                          <td><?php echo $recc['book_author']; ?></td>
                                                          <td><?php echo $recc['book_genre']; ?></td>
                                                      </tr>
                                                      <?php $counter++; ?>
                                                      <?php } ?>
                                            </tbody>
                                            </table>
                                           
                                                  <br />
                                                  <input type="submit" name="Ekle" value="Kitap Ekle" class="button" style="padding: 3px 6px; font-size: 20px;">
                                                </form>
                                        </div>
                                        
                                    </div>

                                    <div class="column one column_divider">
                                        <hr class="no_line" />
                                    </div>
                                    
 

                                </div>
                            </div>
                        </div>
                        <div class="column one column_divider" style="margin-top: 50px;">
                                        <hr class="no_line" />
                                    </div>
                                    <div class="column one column_divider">
                                        <hr class="no_line" />
                                    </div>
                                    <div class="column one column_divider">
                                        <hr class="no_line" />
                                    </div>

                                                           
                        <div class="section the_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
