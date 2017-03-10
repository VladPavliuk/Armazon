{include file="partials/totalInfo.tpl"}

<div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-sx-10">
        <p>В наявності є наступні серії фоторамок:</p>
    </div>
</div>

<div class="row">
    {* Profiles loop *}
    <div id="profiles-list" class="list-group">
        <div class="col-lg-10 col-md-10 col-sm-10 col-sx-10">
            {foreach from=$profiles item=profile}

                <!-- {$profile['profile']|upper} -->
                <a href="/{$profile['profile']}#profile-content">
                    <div class="clearfix list-group-item">
                        <div class="pull-left">
                            <img class="profile-page-image"
                                 src="{#imagesPath#}/frames_mini_photos/{$profile['profile']}/15x21/dark/{$profile['profile']}_15x21_dark_front.jpg"
                                 alt="Фотографія профілю"
                                 title="Фотографія профілю">
                        </div>

                        <div class="pull-left">
                            <h4>Фоторамки серії {$profile['profile']|upper}</h4>

                            <button class="btn btn-primary">
                                <span>Перейти до серії</span>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </a>
            {/foreach}
        </div>
    </div>
</div>

<!--

<div class="row">
    <span data-container="body" data-toggle="popover" data-placement="right"
          data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
          style="user-select: none;">
        <abbr title="attribute">Яка різниця між серіями?</abbr >
    </span>
</div>

-->