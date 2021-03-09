function chamaPost(p,q){

    document.getElementById("nome").value = document.getElementById(p).value
    document.getElementById("valor").value = document.getElementById(q).value
    document.getElementById("nome_cliente").value = document.forms['form1']['nome_cliente'].value 
    
    let nome = document.forms['form1']['nome_cliente'].value;

    if (nome == '') {
        alert("Preencha o nome.");
    }
    else{    
    document.getElementById('form1').submit();
    }
}

