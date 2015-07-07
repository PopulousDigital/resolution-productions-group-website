var portfolio = {
  content : {
    'aon' : {
      'type' : 'image',
      'file' : 'aon',
      'headline' : 'Editorial Reel',
      'subtitle' : 'This is the editorial reel'
    },
    'editorial' : {
      'type' : 'video',
      'file' : 'editorial',
      'headline' : 'Editorial Reel',
      'subtitle' : 'This is the editorial reel'
    },
    'graphic-design' : {
      'type' : 'video',
      'file' : 'graphic-design',
      'headline' : 'Graphic Design Reel',
      'subtitle' : 'This is the editorial reel'
    },
    'led-sizzle' : {
      'type' : 'video',
      'file' : 'led-sizzle',
      'headline' : 'LED Sizzle Reel',
      'subtitle' : 'This is the editorial reel'
    },
    'metro' : {
      'type' : 'image',
      'file' : 'metro',
      'headline' : 'Editorial Reel',
      'subtitle' : 'This is the editorial reel'
    },
    'rpg-sizzle' : {
      'type' : 'video',
      'file' : 'rpg-sizzle',
      'headline' : 'RESOLUTION Sizzle Reel',
      'subtitle' : 'This is the editorial reel'
    },
    'screenworks' : {
      'type' : 'video',
      'file' : 'screenworks',
      'headline' : 'The Screen Works',
      'subtitle' : 'This is the editorial reel'
    },
    'sound-design' : {
      'type' : 'video',
      'file' : 'sound-design',
      'headline' : 'Sound Design Reel',
      'subtitle' : 'This is the editorial reel'
    },
    'usg' : {
      'type' : 'image',
      'file' : 'usg',
      'headline' : 'USG Global Brand Launch',
      'subtitle' : 'This is the editorial reel'
    },
    'usg-launch' : {
      'type' : 'video',
      'file' : 'usg-launch',
      'headline' : 'USG Global Brand Launch',
      'subtitle' : 'This is the editorial reel'
    }
  },
  close : function() {
    $('#portfolio-blanket').hide();
    $('#portfolio-modal').html('');
    $('#portfolio-modal').hide();
  },
  open : function(content) {
    var $blanket = $('#portfolio-blanket');
    var $headline = $('#portfolio-headline');
    var $modal = $('#portfolio-modal');
    var html = '';
    if (portfolio.content[content].type === 'image') {
      html += '<img src="img/portfolio-' + portfolio.content[content].file + '.jpg" class="portfolio-image" />';
      $modal.html(html);
    } else if (portfolio.content[content].type === 'video') {
      html += '<video autoplay loop controls style="width: 100%;" id="portfolio-video">';
      html += '<source src="videos/' + portfolio.content[content].file + '.mp4"></source>';
      html += '</video>';
      $modal.html(html);
      $headline.html('<h1>' + portfolio.content[content].headline + '</h1>');
    }
    $blanket.show();
    $modal.show();
    if ($(window).height() < $modal.height()) {
      portfolio.resize();
    }
    $(window).resize(function() {
      portfolio.resize();
    });
  },
  resize : function() {
    var $close = $('#portfolio-close');
    var $modal = $('#portfolio-modal');
    $close.css('top', ($(window).height() / 2) - ($('#portfolio-video').height() / 2));
    $modal.css('top', ($(window).height() / 2) - ($('#portfolio-video').height() / 2));
  }
};
