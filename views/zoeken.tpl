<section>

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

</section>