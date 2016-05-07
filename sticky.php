<!DOCTYPE html>
<html>
<head>
  <title>Isobar Sticky Notes</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link  href="https://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="dist/styles/main.css">
  <link rel="stylesheet" type="text/css" href="dist/styles/vendor.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="dist/scripts/main.min.js"></script>
  <script src="dist/scripts/vendor.min.js"></script>
</head>
<body>
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
    <li>
      <a href="#">
        <h2>OMG Quote Tilte</h2>
        <p>OMG this is the best quote ever!</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>FML Quote title</h2>
        <p>Fuck my life..</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Cunt Quote</h2>
        <p>Quotes are for cunts</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Hi!</h2>
        <p>Fuck quotes</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Why is the sky blue?</h2>
        <p>Rachel - 2016</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Why is the sky blue?</h2>
        <p>Rachel - 2016</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Why is the sky blue?</h2>
        <p>Rachel - 2016</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Why is the sky blue?</h2>
        <p>Rachel - 2016</p>
      </a>
    </li>
  </ul>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add your Quuote to {Month}'s Quote Wall</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="#" method="post">
            <div class="form-group">
              <textarea id="input-quote" class="form-control" rows="5"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add Quote</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>