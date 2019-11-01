function openPage(url, divResult, boiolagem){
    
    if (typeof divResult == 'undefined')
        divResult = 'principal';

    if (typeof boiolagem == 'undefined')
        boiolagem = false;

    if (boiolagem) {
        $("#"+divResult).fadeOut("slow");

        window.setTimeout(function(){
            $("#"+divResult).load(url);
        },500);

        window.setTimeout(function(){
             $("#"+divResult).fadeIn("slow");
        },800);
    
    } else {
        $("#"+divResult).load(url);
        $("#"+divResult).show();
    }
}

function resetForm(id) {
    $('#'+id).each(function(){
        this.reset();
    });
}

//Remove tags html
function removeHTMLTags(str){
	if(str != ''){
		var strInputCode = str;
		strInputCode = strInputCode.replace(/&(lt|gt);/g, function (strMatch, p1){
			return (p1 == "lt")? "<" : ">";
		});
		var strTagStrippedText = strInputCode.replace(/<\/?[^>]+(>|$)/g, "");
		return strTagStrippedText;
	}
}

//--------------------------------------------------------------------------------
//Fun��o para verificar se o que est� sendo digitado em um campo � somente numero.

function isNumber(e) {
    var keynum
    var keychar
    var numcheck
    
    if(e.keyCode) {
        keynum = e.keyCode
    }
    else if(e.which) {         
        keynum = e.which
        if(e.which == 8) return true;
    }
       
        keychar = String.fromCharCode(keynum)
        numcheck = /\d/
    return numcheck.test(keychar)
}

/*fun��o para enviar formul�rio via Ajax
formId = Id do formul�rio a ser submetido
divResult = Div que mostrar� o resultado. Se for uma string vazia, mostrar� um alert()
isReset = true para resetar o formulario e false para manter os campos preenchidos. Caso essa op��o n�o seja passada como parametro, a fun��o padronizar� o valor true
divUrlReload = Carregar em uma div um p�gina ap�s submeter o formul�rio. Exemplo: 'divRes|page.php?codcli=56'
*/
function ajaxFormSem(formId, divResult, isReset, divUrlReload){
    if(typeof isReset == 'undefined')
        isReset = true;

    if(typeof divUrlReload == 'undefined' || divUrlReload == "")
        divUrlReload = false;

    $("#" + formId).validate({
        submitHandler: function(form) {
            $(form).ajaxSubmit(function(res) {
                if(divResult == '')
                    alert(removeHTMLTags(res.replace('<br>', '\n').replace('<BR>', '\n')));
                else{

                    $("#"+divResult).html(res);
                    $("#"+divResult).fadeIn("slow");

                    window.setTimeout(function(){
                        $("#"+divResult).fadeOut("slow");
                    },);
                }

                if(divUrlReload != false){
                    var divReload = divUrlReload.split('|')[0];
                    var urlReload = divUrlReload.split('|')[1];
                    //openPage(urlReload, divReload, false);
                    $.get(urlReload, function(data){
                        $("#"+divReload).html(data);
                    })
                }
                if(isReset){
                    form.reset();
                }
            });
        }
    });

    return false;
}