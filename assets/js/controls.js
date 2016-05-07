
  var setRad = function( newRad ) {
    if ( newRad < minRad ) {
      newRad = minRad;
    } else if ( newRad > maxRad ) {
      newRad = maxRad;
    }

    radius = newRad;
    ctx.lineWidth = radius * 2;

    radSpan.innerHTML = radius;
  }

  var minRad      = 0.5;
  var maxRad      = 100;
  var defaultRad  = 10;
  var radSpan = document.getElementById('radval');
  var decRad  = document.getElementById('decrad');
  var incRad  = document.getElementById('incrad');

  decRad.addEventListener( 'click', function() {
    setRad( radius - 5 );
  });

  incRad.addEventListener( 'click', function() {
    setRad( radius + 5 );
  });

  setRad( defaultRad );

  var swatches = document.getElementsByClassName('swatch');

  for( var i = 0, n = swatches.length; i < n; i++ ) {
    swatches[i].addEventListener( 'click', setSwatch );
  }

  function setSwatch( e ) {
    var swatch = e.target;
    setSwatchColor( $(swatch).css('background-color') );

    swatch.classNmae += ' -active';
  }

  function setSwatchColor( color ) {
    ctx.fillStyle = color;
    ctx.strokeStyle = color;
    var active = document.getElementsByClassName('-active')[0];

    if ( active ) {
      active.className = 'swatch';
    }
  }

