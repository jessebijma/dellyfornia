
<a href="?action=admin&cms_action=insert">New</a>
<table>
        {foreach from=$result3 item=oneItem}
            <tr>
                <td>{$oneItem.title}</td>
                <td><content>{$oneItem.content}</content></td>
                <td>{$oneItem.id}</td>
                <td><a href="?action=admin&cms_action=edit">edit</a></td>
                <td><a  href="?action=admin&cms_action=delete&id={$oneItem.id}">delete</a></td>
                </tr>
        {/foreach}
    </table>