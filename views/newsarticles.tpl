<section>
<div id="newsarticles">
    {foreach from=$result item=oneItem}
            <div class="newsarticle">
        {$oneItem.title}
                <br>
        <content>{$oneItem.content}</content>
        <br>
        <img src="images/{$oneItem.image}">
        <p>{$oneItem.date_created|date_format:"%D"}</p>
                    </div>
    {/foreach}
        </div>



</section>







