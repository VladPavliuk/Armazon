{foreach from=$colors item=color}
    <div class="frame-unit panel panel-default">
        <div class="panel-body">

            {* Checking count exists *}
            {* Define enabled of remove button *}
            {if isset($cart[$profile][$size['size']][$color['color']])}
                {assign var=count value=$cart[$profile][$size['size']][$color['color']]}
                {assign var=buttonVisible value=""}

            {else}
                {assign var=count value=""}
                {assign var=buttonVisible value="hide"}
            {/if}

            <div class="pull-left">
                <img
                        class="single-frame-image"
                        onclick='uploadFramePhoto("{$profile}","{$size['size']}","{$color['color']}")'
                        src="{#imagesPath#}/frames_mini_photos/{$profile}/{$size['size']}/{$color['color']}/{$profile}_{$size['size']}_{$color['color']}.jpg"
                        alt="Фоторамка"
                        title="Фоторамка"
                        data-toggle="modal"
                        data-target="#more-photos-modal-{$profile}-{$size['size']}-{$color['color']}">
                <br>
                <div>
                    <h5>
                        {if $size['size'] eq "21x30F"}
                            21x30ніжка
                        {else}
                            {$size['size']}
                        {/if}
                        см. "{$color['ukr_title']}"
                    </h5>
                    <h5>
                        <span class="text-success">
                            {$profile_price} грн.
                        </span>
                    </h5>
                    <hr>
                    <input value="{$count}"
                           id='{$profile}-{$size["size"]}-{$color["color"]}'
                           oninput="inputCount('{$profile}','{$size["size"]}','{$color["color"]}', $(this).val());"
                           class="count pull-left" maxlength="4" size="4" max="1000" type="number"
                           placeholder="0 шт.">

                    <button class="remove {$buttonVisible} close pull-left" type="button" aria-label="Close"
                            onclick="clearInput('{$profile}','{$size["size"]}','{$color["color"]}', $(this));">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="more-photos-modal-{$profile}-{$size['size']}-{$color['color']}"
                 tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                Фото {$profile|upper} {$size['size']} "{$color['ukr_title']}"</h4>
                        </div>
                        <div class="modal-body">
                            <div id="carousel-example-generic-{$profile}-{$size['size']}-{$color['color']}"
                                 class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic-{$profile}-{$size['size']}-{$color['color']}"
                                        data-slide-to="0" class="active"></li>
                                    {if file_exists("{#imagesPath#}/frames/{$profile}/{$size['size']}/{$color['color']}/{$profile}_{$size['size']}_{$color['color']}_front.jpg")}
                                        <li data-target="#carousel-example-generic-{$profile}-{$size['size']}-{$color['color']}"
                                            data-slide-to="1"></li>
                                    {/if}
                                    <li data-target="#carousel-example-generic-{$profile}-{$size['size']}-{$color['color']}"
                                        data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="{#imagesPath#}/loading.jpg"
                                             alt="Головне фото">
                                    </div>
                                    {if file_exists("{#imagesPath#}/frames/{$profile}/{$size['size']}/{$color['color']}/{$profile}_{$size['size']}_{$color['color']}_front.jpg")}
                                        <div class="item">
                                            <img src="{#imagesPath#}/loading.jpg"
                                                 alt="Переднє фото">
                                        </div>
                                    {/if}
                                    <div class="item">
                                        <img src="{#imagesPath#}/loading.jpg"
                                             alt="Заднє фото">
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control"
                                   href="#carousel-example-generic-{$profile}-{$size['size']}-{$color['color']}"
                                   role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Попереднє</span>
                                </a>
                                <a class="right carousel-control"
                                   href="#carousel-example-generic-{$profile}-{$size['size']}-{$color['color']}"
                                   role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Наступне</span>
                                </a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Закрити</button>
                        </div>
                    </div>
                </div>
            </div>  <!-- End Modal -->

        </div>

    </div>
{/foreach}