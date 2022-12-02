<?= $this->extend('layout/template');?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="cols">
        <table class="table">
  <tbody>
    <tr>
      <td><img src = "/genuino.jfif" width="200" height = "200"></td>
    </tr>
    <tr>
        <td><h3>Arduino</h3></td>
    </tr>
    <tr>
        <td>Genuino</td>
    </tr>
    <tr>
        <td>10</td>
    </tr>
    <tr>
      <td>
        <button type="button" class="btn btn-warning btn-lg">
          <a href = "/">Back To Home</a>                          
        </button>
      </td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
</div>
<?= $this->endSection();?>