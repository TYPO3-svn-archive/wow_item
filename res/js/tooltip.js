/* REQUIRES MOOTOOLS LIBRARY!(mootools.net) */
window.addEvent('domready', function(e){// when dom is ready

  var wowitem_tooltip = {
    lang: 'de',
    templates: {
      frame: '<div class="tooltip">###DATA###</div>',
      loading: '<img src="typo3conf/ext/wow_item/res/image/ajax-loading.gif">',
    },
    pattern: /tx_wowitem_pi1\[id\]=([0-9]*)/i,
    request: new Request({
      url: 'typo3conf/ext/wow_item/pi1/tooltip.php',
      method: 'get',
      onSuccess: function(reponseText, responseXML){wowitem_tooltip.show(reponseText)},
      onFailure: function(instance){alert(instance);},
    }),
    init: function(){
      $$('a').each(function(item, index){// scan all links
        var itemid = wowitem_tooltip.pattern.exec(item.get('href'));
        if( itemid && parseInt(itemid[1]) ){// if is an item link
          item.addEvent('mouseover',function(e){// show tooltip on mouseover
            wowitem_tooltip.request.cancel();// cancel pending requests
        	  wowitem_tooltip.show(wowitem_tooltip.templates.loading);
            wowitem_tooltip.request.send('itemid='+parseInt(itemid[1])+'&lang='+wowitem_tooltip.lang);
          });
          item.addEvent('mouseout',function(e){// hide tooltip on mouseout
            wowitem_tooltip.request.cancel();// cancel pending requests
            wowitem_tooltip.hide();
          });
          item.addEvent('click',function(e){// hide tooltip on click
            wowitem_tooltip.request.cancel();// cancel pending requests
            wowitem_tooltip.hide();
          });
        }
      });
    },
    show: function(content){overlib(this.templates.frame.replace(/###DATA###/,content),VAUTO,HAUTO,FULLHTML);},
    hide: function(){nd();}
  }
  
  wowitem_tooltip.init();
  
});
