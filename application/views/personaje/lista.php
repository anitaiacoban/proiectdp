<table class="table" styel="text-align: left;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    {LISTA}
        <tr>
            <td>{name}</td>
            <td>{gender}</td>
        </tr>
    {/LISTA}
  </tbody>
</table>

<div style="display: flex; justify-content: flex-start; align-items: center;">
    <form action="/proiectdp/index.php/welcome" method="post" enctype="multipart/form-data" >
        <input type="hidden" id="previous_button"  class="form-control"  name="previous_button" value="{previous_button}"/>
        <button type="submit" class="btn btn-dark" style="{previous_button_style}">Previous</button>
    </form>

    <form action="/proiectdp/index.php/welcome" method="post" enctype="multipart/form-data" >
        <input type="hidden" id="next_button"  class="form-control"  name="next_button" value="{next_button}"/>
        <button type="submit" style="margin-left: 10px; {next_button_style} " class="btn btn-dark">Next</button>
    </form>
</div>