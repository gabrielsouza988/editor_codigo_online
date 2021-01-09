var textareas = document.getElementsByTagName('textarea');
var count = textareas.length;
for(var i=0;i<count;i++){
    textareas[i].onkeydown = function(e){
        if(e.keyCode==9 || e.which==9){
            e.preventDefault();
            var s = this.selectionStart;
            this.value = this.value.substring(0,this.selectionStart) + "        " + this.value.substring(this.selectionEnd);
            this.selectionEnd = s+1; 
        }
    }
}

// $(document).on('click', '#enviar', function (){
// 	let conteudo_html = $('#conteudo_html').val();
// 	let conteudo = $('#conteudo').text();
// 	console.log(conteudo);
// 	$('#conteudo').html(conteudo_html);
// 	$('#editar').html(conteudo);
// });