
Runner.buttonEvents["refrescar_"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='refrescar_';if(!pageObj.buttonEventBefore['refrescar_']){pageObj.buttonEventBefore['refrescar_']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;params["txt"]="Hello";ajax.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['refrescar_']){pageObj.buttonEventAfter['refrescar_']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;location.reload();}}
$('a[id="refrescar_"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="refrescar_"+"_"+Runner.genId();var button_refrescar_=new Runner.form.Button({id:this.id,btnName:"refrescar_"});button_refrescar_.init({args:[pageObj,proxy,pageid]});});};