<section>


        {foreach from=$result1 item=oneItem}
            <div class="videos">
          {$oneItem.name}<br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/{$oneItem.url}" frameborder="0" allowfullscreen></iframe>
            <p>{$oneItem.description}</p>
                </div>
        {/foreach}


   </section>



