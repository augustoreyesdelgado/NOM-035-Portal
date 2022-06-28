<?php include_once("Headerb.html") ?>
<style>
table tr th {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.sorting {
  background-color: #D4D4D4;
}

.asc:after {
  content: ' ↑';
}

.desc:after {
  content: " ↓";
}
</style>

<body>
<section class="contenedor2c">
  <br>
  <div class="container">
    <h1>Tabla con ordenamiento usando jquery+bootstrap</h1>
    <br>
    <div class="panel panel-default">
      <div class="panel-body">
        <table class="table">
          <thead>
            <tr>
              <th>Columna 1</th>
              <th>Columna 2</th>
              <th>Columna 3</th>
              <th>Columna 4</th>
              <th>Columna 5</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Valor 1</td>
              <td>Valor 2</td>
              <td>Valor 3</td>
              <td>Valor 4</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Valor 5</td>
              <td>Valor 1</td>
              <td>Valor 8</td>
              <td>Valor 2</td>
              <td>3</td>
            </tr>
            <tr>
              <td>Valor 3</td>
              <td>Valor 4</td>
              <td>Valor 9</td>
              <td>Valor 1</td>
              <td>11</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <p>
      <small>
      Indicaciones:
      <ul>
        <li>Click sobre el nombre de la columna que se desea ordenar.</li>
        <li>Aparecerá un icono que indica si el ordenamiento es ascendente o descendente.</li>
        <li>Click nuevamente en el nombre de la columna para cambiar el ordenamiento.</li>
        <li>Puede ordenar valores numéricos o texto.</li>
      </ul>
      </small>
    </p>
    <p>
      <small>
      Más información y otros post en: <a href="http://wanderlp.com/blog/tabla-con-ordenamiento-utilizando-css-y-jquery" target="_blank">wanderlp.com</a>
      </small>
    </p>
  </div>
</section>
</body>
<script>
  $('th').click(function() {
    var table = $(this).parents('table').eq(0)
    var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
    this.asc = !this.asc
    if (!this.asc) {
      rows = rows.reverse()
    }
    for (var i = 0; i < rows.length; i++) {
      table.append(rows[i])
    }
    setIcon($(this), this.asc);
  })

  function comparer(index) {
    return function(a, b) {
      var valA = getCellValue(a, index),
        valB = getCellValue(b, index)
      return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
    }
  }

  function getCellValue(row, index) {
    return $(row).children('td').eq(index).html()
  }

  function setIcon(element, asc) {
    $("th").each(function(index) {
      $(this).removeClass("sorting");
      $(this).removeClass("asc");
      $(this).removeClass("desc");
    });
    element.addClass("sorting");
    if (asc) element.addClass("asc");
    else element.addClass("desc");
  }
</script>
