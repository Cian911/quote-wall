  
  var canvas = document.getElementById("quote-wall-canvas");
  var ctx = canvas.getContext("2d");
  var clear = document.getElementById("clear");

  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  var radius = 10;
  var dragging = false;
  var mobile = false;
  ctx.lineWidth = radius * 2;

  var addPoint = function( e ) {
    if ( dragging ) {
      ctx.lineTo( e.clientX + 20, e.clientY - 70 );
      ctx.stroke();
      ctx.beginPath();
      ctx.arc( e.clientX + 20, e.clientY - 70, radius, 0, Math.PI * 2 );
      ctx.fill();
      ctx.beginPath();
      ctx.moveTo( e.clientX + 20, e.clientY - 70 );
    } 
  }

  var start = function( e ) {
    dragging = true;
    addPoint( e );
  }

  var stop = function( e ) {
    dragging = false;
    ctx.beginPath();
  }

  var clearCanvas = function( e ) {
    ctx.clearRect( 0, 0, canvas.width, canvas.height );
  }

  function checkMobile() {
    if ( window.innerWidth <= 768 ) {
      mobile = true;
    }
  }

  checkMobile();

  if ( mobile === true ) {
    console.log('mobile');
    canvas.addEventListener( 'touchstart', start );
    canvas.addEventListener( 'touchmove', addPoint );
    canvas.addEventListener( 'touchend', stop );
    clear.addEventListener( 'click', clearCanvas );
  } else {
    canvas.addEventListener( 'mousedown', start );
    canvas.addEventListener( 'mousemove', addPoint );
    canvas.addEventListener( 'mouseup', stop );
    clear.addEventListener( 'click', clearCanvas );
  }


