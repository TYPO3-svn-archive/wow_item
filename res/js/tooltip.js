/* REQUIRES MOOTOOLS LIBRARY!(mootools.net) */
window.addEvent('domready', function(e){// when dom is ready

  var wowitem_tooltip = {
    lang: 'de',
    templates: {
      frame: '<div id="tooltipcontainer" class="tooltip" style="display: block; visibility: visible; width:500px;"><div id="tool1container" style="width: auto;"><table cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="tl"/><td class="t"/><td class="tr"/></tr><tr><td class="l"></td><td class="bg"><div id="toolBox">###DATA###</div></td><td class="r"></td></tr><tr><td class="bl"/><td class="b"/><td class="br"/></tr></tbody></table></div><table style="float: left; display: none; margin-top: 10px;" id="tool2container"><tbody><tr><td class="tl"/><td class="t"/><td class="tr"/></tr><tr><td class="l"></td><td class="bg"><div id="toolBox_two">TEST</div></td><td class="r"></td></tr><tr><td class="bl"/><td class="b"/><td class="br"/></tr></tbody></table><table style="float: left; display: none; margin-top: 10px;" id="tool3container"><tbody><tr><td class="tl"/><td class="t"/><td class="tr"/></tr><tr><td class="l"></td><td class="bg"><div id="toolBox_three">TEST</div></td><td class="r"></td></tr><tr><td class="bl"/><td class="b"/><td class="br"/></tr></tbody></table></div>',
      loading: '<div class="loading">Searching...please wait.</div>',
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
