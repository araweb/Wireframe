// V0.3 14/04/2011 @araweb
// V0.4 11/08/2011 @araweb

// desativa o campo informado em 'id' se o checkbox informado em 'idCheck' foi clicado
function disabledField(id, idCheck) {
    id = document.getElementById(id);

    if (document.getElementById(idCheck).checked) {
        id.disabled = true;
        id.value = '';
        id.style.backgroundColor = '#F0F8FF';
    } else {
        id.disabled = false;
        id.focus();
        id.style.backgroundColor = '#ffffff';
    }
}

// coloca em caixa alta o texto do campo informado em 'id'
function touppercase(id) {
    document.getElementById(id).value = document.getElementById(id).value.toUpperCase();
}

// coloca em caixa baixa o texto do campo informado em 'id'
function tolowercase(id) {
    document.getElementById(id).value = document.getElementById(id).value.toLowerCase();
}

// substitui virgula por ponto no campo informado em 'id'
function replaceComa(id) {
    var c = document.getElementById(id).value;
    if (c.indexOf(",") != -1) {
        document.getElementById(id).value = c.replace(",", ".");
    }
}

// coloca o texto especificado em 'text'
// no textarea especificado em 'id'
function putTextarea(id, text) {
    var txtarea = document.getElementById(id);

    if (txtarea.value.length > 1) {
        text = ' ' + text + ' ';
    } else {
        text = text + ' ';
    }    

    txtarea.value += text;
    txtarea.focus();
}

// pega o valor do select especificado em 'idFrase'
// e coloca no textarea especificado em 'id'
function selectToTextArea(id, idFrase) {
    var frase = document.getElementById(idFrase).value;
    if (frase != 'NULL') {
        putTextarea(id, frase);
    }
}

function round(num, X) {
    X = (!X ? 2 : X);
    return Math.round(num*Math.pow(10,X))/Math.pow(10,X);
}

// calcPorcentagem() 24/2/2006 Herbert Araujo <ara@phpao.com.br>
// retorna o cálculo de porcentagem
// pede o valor e a taxa percentual como parâmetros
function calcPorcentagem(taxaPercentual, valor) {
    return taxaPercentual * valor / 100;
}

// valida o campo informado em 'id' de acordo com o número
// de caracteres informado em 'lem'. 'isnan' aceita 1 ou 0
// para considerar ou não números no campo
function lemField(id, lem, isnan) {
    var lemField = document.getElementById(id);

    if (isnan == 0 || isNaN(lemField.value) || lemField.value == '') {
        if (lemField.value.length < lem) {
            window.alert('Mínimo de ' + lem + ' caracteres!');
            lemField.focus();
            return false;
        }
    }
    return true;
}

// emoticon() 08/06/2006
// insere um ícone em campos textarea
function emoticon(id, text) {
   var txtarea = document.getElementById(id);
   text = ' ' + text + ' '; 
   if (txtarea.createTextRange && txtarea.caretPos) { 
      var caretPos = txtarea.caretPos; 
      caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text; 
      txtarea.focus(); 
   } else { 
      txtarea.value  += text; 
      txtarea.focus(); 
   } 
}

// confirmação de delete
function del(str) {
    if (window.confirm(str)) {
        return true;
    } else {
        return false;
    }
}

// abre uma janela
function popUp(file, w, h) {
    window.open(file, "", "left=100,top=100,width=" + w + ",height=" + h + ",status=1,resizable=1,scrollbars=1");
}

// oculta ou mostra o 'div' informado em 'id'
function showHidden(id) {
    if (document.getElementById(id).style.display == 'none') {
        document.getElementById(id).style.display = 'block';
    } else {
        document.getElementById(id).style.display = 'none';
    }
}

// usando em tabelas
function showHidden(id) {
    if (document.getElementById(id).style.display == 'none') {
        document.getElementById(id).style.display = 'table-row';
    } else {
        document.getElementById(id).style.display = 'none';
    }
}

// valida um endereço de email
function isEmail(email) {
    var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i

    if (filter.test(email)) {
        return true;
    } else {
        return false;
    }
}

// retorna um array com todos os 'values' dos checkbox's marcados do campo informado em 'id'
function returnChecked(field) {

    var inputs = document.getElementsByTagName('input');
    var arrChecked = new Array;
    var j = 0;

    for (i = 0; i < inputs.length; i++) {

        var item = inputs[i];
        if (item.type == 'checkbox' && item.name == field && item.checked) {
            arrChecked[j++] = item.value; //window.alert(item.name + ' - ' + item.value);
        }
    }
    return arrChecked;
}

// conta os caracteres do 'textarea' informado em 'x'
function textCounter(x, y, limit) {
    var txtarea = document.getElementById(x);
    var remtxtarea = document.getElementById(y);
    
    if (txtarea.value.length > limit) {
        txtarea.value = txtarea.value.substring(0, limit);
    } else {
        remtxtarea.value = limit - txtarea.value.length;
    }
}

// limpa o campo informado em 'id' se o seu valor
// for igual ao informado em 'v'
function clearField(id, v) {

    var field = document.getElementById(id);

    if (field.value == v) {
        field.value = '';
    }
}

// adiciona a página atual aos favoritos
function addFavorite(page, title) {
    if (document.all) {
        window.external.AddFavorite(page, title);
    } else {
        window.sidebar.addPanel(title, page, '');
    }
}

// muda do campo informado em 'field1' para o campo
// informado em 'field2' de acordo com o atributo 'maxlength' do campo 'field1'
function autotab(field1, field2) {
    if (field1.getAttribute('maxlength') == field1.value.length) {
        document.getElementById(field2).focus();
    }
}

// mostra a mensagem de 'msg' se o checkbox informado em 'id' estiver checado
function notice(id, msg) {
    if (document.getElementById(id).checked) {
        window.alert(msg);
    }
}

// substitui 'x' por 'y' em 'id' 08/09/2010
function str_replace(x, y, id) {
    var field = document.getElementById(id);
    if (field.value.indexOf(x) != -1) {
        field.value = field.value.replace(x, y);
    }
}

// share do twitter
function shareTwitter(url, text) {
    window.open('http://twitter.com/share?url=' + url + '&text=' + encodeURI(text), '', 'width=550,height=380,left=350');
}

// máscara para campos input 17/03/2011
// exemplo de uso: onkeypress="return mascara(event, this, '##/##/####');"
function mascara(e, src, mask) {
	if (window.event) {
		_TXT = e.keyCode;
	} else if (e.which) {
		_TXT = e.which;
	}

	if(_TXT > 47 && _TXT < 58) {
		var i = src.value.length;
		var saida = mask.substring(0, 1);
		var texto = mask.substring(i);
		if (texto.substring(0, 1) != saida) {
			src.value += texto.substring(0, 1);
		}
		return true;
	} else {
		if (_TXT != 8) {
			return false;
		} else {
			return true;
		}
	}
}

// chat online microsoft messenger live 14/04/2011 @araweb
// http://settings.messenger.live.com/applications/Default.aspx
function inviteMessenger(invitee) {
	window.open('http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=' + invitee + '&mkt=pt-BR', 'messenger', 'left=100,top=100,width=360,height=460');
}

/* marca ou desmarca todos os checkboxes de um determinado grupo 11/08/2011 @araweb
 * onde:
 * id = id do formulário
 * name = nome dos checkboxes
 * status = 1 para marcar todos e 0 para desmarcar todos
*/
function check(id, name, status) {
    form = document.getElementById(id);
    for (i = 0; i < form.elements.length; i++) {
        if(form.elements[i].name == name && form.elements[i].type == 'checkbox') {
            form.elements[i].checked = status;
        }
    }
}