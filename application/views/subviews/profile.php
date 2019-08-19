<div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section" style="padding-top:90px; padding-bottom:40px; background-color:#ebc175">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_fancy_heading">
                                        <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title">Profile</h2>
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
                                            <h2 style="margin-bottom: 7px; margin-top: 15px;">Kullanıcı : <?php echo $userInfo['admin_name']; ?></h2>
                                            <hr class="no_line hrmargin_b_20" />
                                        </div>
                                    </div>

                                    <div class="column one">
                                        <div class="column_attr" style="text-align: center;">
                                            <h2 style="margin-bottom: 7px; margin-top: 15px;"><a href="http://localhost/bookstore/index.php/Profile/book_all/">Tüm Kitaplar</a></h2>
                                            <hr class="no_line hrmargin_b_20" />
                                        </div>
                                    </div>

                                    <!-- Page devider -->
                                    <!-- One full width row-->
                                    <div class="column one column_divider" style="margin-top: 50px;">
                                        <hr class="no_line" />
                                    </div>
                                    <div class="column one">
                                        <div class="column one-second">
                                            <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title" style="font-size: 40px;">Okunan Kitaplar</h2>
                                            <?php if(empty($real_reading) || $real_reading[0]=="" ){ ?>
                                            <h1 style="margin-top: 50px;"><i>Listelenecek kitap bulunamamıştır</i></h1>
                                            <?php } else{ ?>

                                               
                                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                            <thead>
                                              <tr>
                                                <th class="th-sm">#</th>
                                                <th class="th-sm">Kitap Adı</th>
                                                <th class="th-sm">Kitap Yazarı</th>
                                                <th class="th-sm">Kitap Türü</th>
                                                <th class="th-sm">Rating</th>
                                              </tr>
                                            </thead>
                                                  <tbody>
                                                      <?php $count=1; ?>
                                                    <?php foreach ($real_reading as $reads) { ?>
                                                    <tr>
                                                     <th scope="row"><?php echo $count; ?></th>
                                                      <td><?php echo $reads['book_name']; ?></td>
                                                      <td><?php echo $reads['book_author']; ?></td>
                                                      <td><?php echo $reads['book_genre']; ?></td>
                                                      <td><?php echo $rating[$count-1]; ?></td>
                                                    </tr>
                                                    <?php $count++; ?>
                                                    <?php } ?>
                                                  </tbody>
                                            </table>
                                                <?php } ?>
                                                <a href="http://localhost/bookstore/index.php/Profile/add_book_form">
                                                <button style="margin-top: 15px;">Kitap Ekle</button>
                                                </a>
                                        </div>
                                        </div>
                                        <div class="column one-second">
                                            <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title" style="font-size: 40px;">Önerilenler</h2>
                                            <?php if(empty($reccs) || $reccs[0]=="" ){ ?>
                                            <h1 style="margin-top: 50px;"><i>Listelenecek kitap bulunamamıştır</i></h1>
                                            <?php } else{ ?>
                                             <form action="<?php echo MAIN; ?>Profile/add_readed_book" method='POST' enctype="multipart/form-data">
                                              <table id="dtBasicExample1" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                            <thead>
                                              <tr>
                                                <th class="th-sm">#</th>
                                                <th class="th-sm">&nbsp;</th>
                                                <th class="th-sm">Rating</th>
                                                <th class="th-sm">Kitap Adı</th>
                                                <th class="th-sm">Kitap Yazarı</th>
                                                <th class="th-sm">Kitap Türü</th>
                                                <th class="th-sm">Benzerlik Skor</th>
                                              </tr>
                                            </thead>
                                                  <tbody>
                                                     <?php $counter=1; ?>
                                                      <?php foreach ($reccs as $recc => $value) { ?>
                                                      <tr>
                                                          <td><?php echo $counter; ?></td>
                                                          <td><input type="checkbox" name="<?php echo $value['id']['book_id']; ?>"/></td>
                                                          <td><input type="number" style="width: 50px;" name="<?php echo $value['id']['book_id']; ?>R"></input></td>
                                                          <td><?php echo $value['name']; ?></td>
                                                          <td><?php echo $value['author']['book_author']; ?></td>
                                                          <td><?php echo $value['genre']['book_genre']; ?></td>
                                                          <td><?php echo $value['simscore']; ?></td>
                                                      </tr>
                                                      <?php $counter++; ?>
                                                      <?php } ?>
                                                  </tbody>
                                            </table>

                                                  <br />
                                                  <input type="submit" name="Ekle" value="Okunanlara Ekle" class="button" style="padding: 3px 6px; font-size: 20px;">
                                                </form>
                                            <?php } ?>    
                                        </div>
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