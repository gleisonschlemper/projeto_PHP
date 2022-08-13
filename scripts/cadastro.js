var aside = document.querySelector('aside').style.right = '-25%';
function asideControle(){
    if(document.querySelector('aside').style.right == '-25%'){
        document.querySelector('aside').style.right = '0%';
        document.querySelector('.menu').style.color = 'white';
    }
    else{
        document.querySelector('aside').style.right = '-25%';
        document.querySelector('.menu').style.color = 'black';
    }
}

function abrirClick(){
    document.querySelector('.labelCadastro').style.bottom = '50px';
}

function chamarLogin(){
    if(document.querySelector('.ol_login').style.display == 'none'){
        document.querySelector('.ol_login').style.display = 'flex'
    }
    else{
        document.querySelector('.ol_login').style.display = 'none'
    }
   
}