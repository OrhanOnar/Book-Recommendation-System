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
                                            <h2 style="margin-bottom: 7px; margin-top: 15px;">Kitap : <?php echo $poster['bname']; ?>   Türü : <?php echo $poster['bcategory']; ?> </h2>
                                            <hr class="no_line hrmargin_b_20" />
                                        </div>
                                    </div>
                                    <!-- Page devider -->
                                    <!-- One full width row-->
                                    <div class="column one column_divider" style="margin-top: 50px;">
                                        <hr class="no_line" />
                                    </div>
                                    <div class="column one">
                                        
                                            <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title" style="font-size: 40px;">Önerilen Kitaplar</h2>
                                          <form action="<?php echo MAIN; ?>Profile/add_reading_book" method='POST' enctype="multipart/form-data"> 
                                           <table class="table table-striped">
                                                      <tr>
                                                      <th>&nbsp;</th>
                                                      <th scope="col">#</th>
                                                      <th scope="col">Kitap Adı</th>
                                                      <th scope="col">Kitap Yazarı</th>
                                                      <th scope="col">Kitap Türü</th>
                                                      <th scope="col">Kitap Yılı</th>
                                                      </tr>
                                                      <?php $counter=1; ?>
                                                      <?php foreach ($reccs as $recc) { ?>
                                                      <tr>
                                                          <td><input type="checkbox" name="<?php echo $recc['book_id']; ?>" /></td>
                                                          <td><?php echo $counter; ?></td>
                                                          <td><?php echo $recc['book_name']; ?></td>
                                                          <td><?php echo $recc['book_author']; ?></td>
                                                          <td><?php echo $recc['book_genre']; ?></td>
                                                          <td><?php echo $recc['book_year']; ?></td>
                                                      </tr>
                                                      <?php $counter++; ?>
                                                      <?php } ?>
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
