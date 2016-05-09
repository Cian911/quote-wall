<div class="toolbar">
  <div class="toolbar-left">
    <button type="button" class="btn btn-lg btn-warning" data-toggle="modal" data-target="#myModal">Add Quote</button>
  </div>
  <div class="toolbar-right"></div>
</div>
<div class="month">
  <h2>May</h2>
</div>
<ul class="quote-container">
<?php foreach( $data as $quote ) { ?>
  <li>
    <a href="#">
      <h2><?php echo $quote['quote_title']; ?></h2>
      <p><?php echo $quote['text']; ?></p>
    </a>
  </li>
<?php } ?>
</ul>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add your Quote to {Month}'s Quote Wall</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="front/addQuote" method="post">
          <div class="form-group">
            <input type="text" name="author" class="form-control" placeHolder="Who's the Author"></input>
          </div>
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeHolder="Quote Title"></input>
          </div>
          <div class="form-group">
            <textarea id="input-quote" name="quote" class="form-control modal-form-control" placeHolder="Enter your Quote here" rows="5"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Quote</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>