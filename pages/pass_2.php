<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="comparison">
  <table>
    <thead>
      <tr>
        <th class="tl tl2"></th>
        <th class="product" style="background:#d80000; border-top-left-radius: 5px; border-left:0px;"><?=$registrar1['titulo']?></th>
        <th class="product" style="background:#d80000;"><?=$registrar2['titulo']?></th>
        <th class="product" style="border-top-right-radius: 5px; border-right:0px; background:#d80000;"><?=$registrar3['titulo']?></th>
      </tr>
      <tr>
        <th></th>
        <th class="price-info">
          <div class="price-now"><span>R$: <?=$registrar1['valor']?></span>
            <p>  /<?=$registrar1['tempo']?> Mês(es)</p>
          </div>
        </th>
        <th class="price-info">
          <div class="price-now"><span>R$: <?=$registrar2['valor']?> </span>
            <p>  /<?=$registrar2['tempo']?> Mês(es)</p>
          </div>
        </th>
        <th class="price-info">
          <div class="price-now"><span>R$: <?=$registrar3['valor']?></span>
            <p> /<?=$registrar3['tempo']?> Mês(es)</p>
          </div>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td colspan="3">HD</td>
      </tr>
      <tr class="compare-row">
        <td>HD</td>
        <td><i class="fa fa-check"></i>
        </td>
        <td><span><i class="fa fa-check"></i></span></td>
        <td><i class="fa fa-check"></i>
        </td>
      </tr>
      <tr>
        <td> </td>
        <td colspan="3">Series</td>
      </tr>
      <tr>
        <td>Séries</td>
        <td><i class="fa fa-check"></i>
        </td>
        <td><span><i class="fa fa-check"></i></span></td>
        <td><i class="fa fa-check"></i>
        </td>
      </tr>
      <tr>
        <td> </td>
        <td colspan="3">Simultaneo</td>
      </tr>
      <tr class="compare-row">
        <td>Simultaneo</td>
        <td><?=$registrar1['telas']?></i>
        </td>
        <td><span><?=$registrar2['telas']?></span></td>
        <td><?=$registrar3['telas']?></i>
        </td>
      </tr>
      <tr>
        <td> </td>
        <td colspan="4">Tempo</td>
      </tr>
      <tr>
        <td>Tempo</td>
        <td><?=$registrar1['tempo']?> mês(es)</i>
        </td>
        <td><span><?=$registrar2['tempo']?> mês(es)</span></td>
        <td><?=$registrar3['tempo']?> mes(es)</i>
        </td>
      </tr>
      
        <td> </td>
      </tr>
      <tr>
        <td></td>
        <td><a href="?action=regform&plan=<?=$registrar1['id']?>" class="price-buy">Escolher<span class="hide-mobile"></span></a></td>
        <td><a href="?action=regform&plan=<?=$registrar2['id']?>" class="price-buy">Escolher<span class="hide-mobile"></span></a></td>
        <td><a href="?action=regform&plan=<?=$registrar3['id']?>" class="price-buy">Escolher<span class="hide-mobile"></span></a></td>
      </tr>
    </tbody>
  </table>

</div>