// Pantalla de carga: mínimo 1,5 s, máximo 4,5 s; no se muestra sin JS ni con «reducir movimiento».
(function(d,w){
  var h=d.documentElement,MIN=1500,MAX=4500,done=false,el;
  if(!w.Promise||(w.matchMedia&&w.matchMedia('(prefers-reduced-motion:reduce)').matches)){return;}
  if(!(w.CSS&&CSS.supports&&CSS.supports('clip-path','inset(0)'))){return;}
  h.classList.add('lp-js');
  function remove(){el=el||d.getElementById('lp-loader');if(el&&el.parentNode){el.parentNode.removeChild(el);}h.classList.remove('lp-js','lp-run','lp-done');}
  function finish(){if(done){return;}done=true;h.classList.add('lp-done');setTimeout(remove,700);}
  w.addEventListener('pageshow',function(e){if(e.persisted){done=true;remove();}});
  setTimeout(finish,MAX);
  var loaded=new Promise(function(r){if(d.readyState==='complete'){r();}else{w.addEventListener('load',r);}});
  function go(){
  	var fonts=(d.fonts&&d.fonts.load)?Promise.race([d.fonts.load('800 100px "Barlow Condensed"'),new Promise(function(r){setTimeout(r,700);})]):Promise.resolve();
  	Promise.all([fonts.catch(function(){}).then(function(){h.classList.add('lp-run');return new Promise(function(r){setTimeout(r,MIN);});}),loaded]).then(finish);
  }
  if(d.readyState==='loading'){d.addEventListener('DOMContentLoaded',go);}else{go();}
})(document,window);
