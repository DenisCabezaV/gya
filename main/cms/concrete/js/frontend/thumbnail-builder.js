!function(a,b){"use strict";var c={build:function(){b.post(CCM_DISPATCHER_FILENAME+"/ccm/system/file/thumbnailer",function(a){a.built===!0&&(a.path&&b('[src$="'+a.path+'"]').each(function(){var a=b(this);a.attr("src",a.attr("src"))}),setTimeout(c.build,50))})}};c.build()}(this,jQuery);