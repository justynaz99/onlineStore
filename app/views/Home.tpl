{extends file="main.tpl"}


{block name="menuHome"}
    <li><a href="{$conf->action_root}home">Strona główna</a></li>
{/block}

{block name="menuLogIn"}
    <li><a href="{$conf->action_root}loginShow">Zaloguj</a></li>
{/block}

{block name="menuRegistration"}
    <li><a href="{$conf->action_root}registrationShow">Zarejestruj</a></li>
{/block}


{block name="content"}
    <section id="banner" style="margin-top: -1em">
        <div class="content">

            <header>
                <h1>Sklep<br/>
                    internetowy</h1>
                <p>Aenean ornare velit lacus</p>
            </header>
            <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue.
                Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus
                nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor
                sit nullam.</p>
        </div>
        <span class="image object">
		    <img src="images/pic10.jpg" alt=""/>
		</span>
    </section>

    <section>
        <header class="major">
            <h2>Lista produktów</h2>
        </header>

        <div class="row gtr-200">
            <form action="{$conf->action_root}searchShow" method="post" style="width: 400px">
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="name" id="name" value="{$productForm->name}" placeholder="Nazwa produktu"/><br>
                    <input type="submit" value="Szukaj" class="primary"/><br>
                </div>
            </form>

            <form action="{$conf->action_root}home" method="post" style="width: 400px">
                <div class="col-6 col-12-xsmall">
                    <select name="option" id="option">
                        <option value="">- Filtruj -</option>
                        <option value="1">Po cenie</option>
                        <option value="2">Alfabetycznie</option>
                    </select><br>
                    <input type="submit" value="Filtruj" class="primary"/><br>
                </div>
            </form>


        </div>
        <div class="posts" style="margin-top: -1em">
            {foreach $products as $p}
                <article>
                    <a href="#" class="image"><img src="images/pic{$p["id_product"]}.jpg" alt=""/></a>
                    <h3>{$p["name"]}</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                        interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                    <p>{$p["price"]} zł</p>

                </article>
            {/foreach}
        </div>

        {block name=backToList}

        {/block}

        {block name=pagination}
            <br>
            <ul class="pagination">
                {if {$page} == 1}
                    <li><span class="button disabled">Previous page</span></li>
                {else}
                    <li><a href="{$conf->action_root}home/{$page - 1}" class="button">Previous page</a></li>
                {/if}
                {if {$page} == {$lastPage}}
                    <li><span class="button disabled">Previous page</span></li>
                {else}
                    <li><a href="{$conf->action_root}home/{$page + 1}" class="button">Next page</a></li>
                {/if}
            </ul>
        {/block}



    </section>
{/block}