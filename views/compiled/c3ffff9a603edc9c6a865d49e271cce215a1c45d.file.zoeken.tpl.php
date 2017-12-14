<?php /* Smarty version Smarty-3.1.18, created on 2016-11-24 21:25:09
         compiled from "views/zoeken.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67017936258374ca5b4fd27-11810871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3ffff9a603edc9c6a865d49e271cce215a1c45d' => 
    array (
      0 => 'views/zoeken.tpl',
      1 => 1478020700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67017936258374ca5b4fd27-11810871',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58374ca5e24d57_49069964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58374ca5e24d57_49069964')) {function content_58374ca5e24d57_49069964($_smarty_tpl) {?><section>

  <div class="search">

      <script>
          function zoekFunctie (str) {
              if (str.length == 0) {
                  document.getElementById("searchoutput").innerHTML = "";
                  return;
              } else {
                  var xmlhttp = new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function () {
                      if (this.readyState == 4 && this.status == 200) {
                          document.getElementById("searchoutput").innerHTML = this.responseText;
                      }
                  };
                  var number;
                  if (document.getElementById("zoekoptie1").checked) {
                      number = document.getElementById("zoekoptie1").value;
                  }
                  if (document.getElementById("zoekoptie2").checked) {
                      number = document.getElementById("zoekoptie2").value;
                  }
                  if (document.getElementById("zoekoptie3").checked) {
                      number = document.getElementById("zoekoptie3").value;
                  }
                  xmlhttp.open("GET", "views/search.php?action=zoeken&q=" + str+ '&r='+number, true);

                  xmlhttp.send();
              }
          }

      </script>

      <form>

          <input type="text" onkeyup="zoekFunctie(this.value)">
          <input type='radio'name="zoekoptie" id="zoekoptie1" value="0" checked>
          <label for="zoekoptie1"> newsarticles </label>
           <input type='radio'name="zoekoptie" id="zoekoptie2" value="1">
          <label for="zoekoptie2"> foto's </label>
           <input type='radio'name="zoekoptie" id="zoekoptie3" value="2">
          <label for="zoekoptie3"> video's </label>

      </form>

      <p><span id="searchoutput"></span></p>

  </div>

</section><?php }} ?>
