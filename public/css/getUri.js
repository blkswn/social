function getUrlVars(){
  var vars = [],hash;
  var hashes = window.location.href.slice(window.location.href.indexOf('?')+1).split('&');
  for(var i = 0;i < hashes.length;i++){
    hash = hashes[i].split('=');
    vars.push(hashes[0]);
    vars[hashes[0]]=hashes[1];
  }
  return vars;
}
