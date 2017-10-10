<div id="myModal" class="uk-modal">
    <div class="uk-height-viewport uk-modal-dialog uk-modal-dialog-blank">
        <button class="modalClose uk-modal-close uk-close" type="button"></button>
        <div class="modal-height-full uk-grid">
            <div class="uk-hidden-small uk-width-medium-1-2 uk-width-large-1-2">
                <img id="modalImage" class="modal-img" src="" width="100%" alt="">
            </div>
            <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                <div class="modal-content">
                    <div id="myFrame" class="modalYtFrame" data-videoid="<?php //echo $item->youtubeVideoId()?>">
                        <!-- iframe goes here -->
                    </div>
                    <div class="modal-text ups-space-up-10">
                        <h1 id="modalName"><?php //echo $item->name()->html() ?></h1>
                        <article id="modalDesc">
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 