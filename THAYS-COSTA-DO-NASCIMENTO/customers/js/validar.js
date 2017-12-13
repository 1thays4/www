
function enviardados() {

    if (document.dados.customer['name'].value === "" || document.dados.name.value.length < 8) {
        alert("Preencha campo NOME corretamente!");
        document.dados.name.focus();
        return false;
    }
}
