
<div id="container_body">
    <div id="body">
        <div id="maincolumn_full">
            <table class="contentpaneopen">
                <tr valign="top">
                    <div id="container_frontpage">
                        <center> <p align="center">
                            <img src="images/content/news_welcome.jpg" style="padding-bottom:10px;"/>
                            <div id="search_subhead">

                                <style> @import url("css/news.css"); </style>

                                <?php foreach($news_info as $news) { ?>
                                    <div class="square">
                                        <h3><?=$news['date']?> - <?=$news['title']?></h3>
                                        <?php if($action == 'article') { ?>
                                            <div><?=$news['content']?></div>
                                        <?php } elseif(mb_strlen($news['content']) > 256) { ?>
                                            <div><pre><?=mb_substr($news['content'],0,256);?></pre><a href="news/<?=$news['id']?>">...... (more)</a></div>
                                        <?php } else { ?>
                                            <div><?=$news['content']?></div>
                                        <?php } ?>

                                        <?php if(isset($this->session->userdata['logged_in'])) { ?>
                                            <a href="news/modify/<?=$news['id']?>">modify</a> |
                                            <a href="news/delete/<?=$news['id']?>">delete</a>
                                        <?php } ?>
                                    </div>
                                <?php } ?>

                                <br><br>
                                <?php if($action == 'article') {?>
                                    <a href="javascript:window.history.back();">Back</a>
                                <?php } else {?>
                                    <a href="news/create">Add News </a> |
                                    <?=$news_link?>
                                <?php } ?>
                            </div>
                        </p> </center>
                    </div>
                    <div id="container_circles">
                        <div id="circles_left"><img height="416" width="260" src="images/background_circles_left.jpg" /></div>
                        <div id="circles_right"><img height="392" width="248" src="images/background_circles_right.jpg" /></div>
                    </div>
                </tr>
            </table>
            <span class="article_separator">&nbsp;</span>
        </div>
    </div>
</div>
