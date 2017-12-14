<section>
    {foreach from=$result2 item=oneItem}
        <div class="foto">
            <img src="images/{$oneItem.src}">
        </div>
    {/foreach}

    <div class="pages">
    <ul>
        <li><a href="?action=fotos&page_nr=1">1</a> </li>
        <li><a href="?action=fotos&page_nr=2">2</a> </li>
        <li><a href="?action=fotos&page_nr=3">3</a> </li>
        <li><a href="?action=fotos&page_nr=4">4</a> </li>
        <li><a href="?action=fotos&page_nr=5">5</a> </li>

    </ul>
        </div>


</section>