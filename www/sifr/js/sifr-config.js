var trajan = {
  src: '/sifr/trajan_pro.swf'
};

sIFR.activate(trajan);
sIFR.replace(trajan, {
  selector: '.navigation li',
  css: [
      ,'a { text-decoration: none; }'
      ,'a:link { color: #000000; }'
      ,'a:hover { color: #404040;border-bottom:1px dashed #404040; }'
    ]
});