<html>
<head>
    <title>Editar</title>
    <meta charset="UTF-8">
    <script language="JavaScript">
        function enviardados() {

            if (document.dados.name.value === "" || document.dados.name.value.length < 8) {
                alert("Preencha campo NOME corretamente!");
                document.dados.name.focus();
                return false;
            }
    </script>
</head>
<body>
<?php require_once('functions.php');
edit(); ?>
<?php include(HEADER_TEMPLATE); ?>
<h2>Atualizar Cliente</h2>
<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post" name="dados" onsubmit="return enviardados()">
    <hr/>
    <div class="row">
        <div class="form-group col-md-7"><label for="name">Nome / Razão Social</label> <label>
                <input type="text"
                       class="form-control"
                       name="customer['name']"
                       value="<?php echo $customer['name']; ?>">
            </label>
        </div>
        <div class="form-group col-md-3"><label for="campo2">CNPJ / CPF</label> <label>
                <input type="text"
                       class="form-control"
                       name="customer['cpf_cnpj']"
                       value="<?php echo $customer['cpf_cnpj']; ?>">
            </label>
        </div>
        <div class="form-group col-md-2"><label for="campo3">Data de Nascimento</label> <label>
                <input type="text"
                       class="form-control"
                       name="customer['birthdate']"
                       value="<?php echo $customer['birthdate']; ?>">
            </label>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-5"><label for="campo1">Endereço</label> <label>
                <input type="text"
                       class="form-control"
                       name="customer['address']"
                       value="<?php echo $customer['address']; ?>">
            </label>
        </div>
        <div class="form-group col-md-3"><label for="campo2">Bairro</label> <label>
                <input type="text" class="form-control"
                       name="customer['hood']"
                       value="<?php echo $customer['hood']; ?>">
            </label>
        </div>
        <div class="form-group col-md-2"><label for="campo3">CEP</label> <label>
                <input type="text" class="form-control"
                       name="customer['zip_code']"
                       value="<?php echo $customer['zip_code']; ?>">
            </label>
        </div>
        <div class="form-group col-md-2"><label for="campo3">Data de Cadastro</label> <label>
                <input type="text"
                       class="form-control"
                       name="customer['created']"
                       disabled
                       value="<?php echo $customer['created']; ?>">
            </label>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-3"><label for="campo1">Município</label> <label>
                <input type="text"
                       class="form-control"
                       name="customer['city']"
                       value="<?php echo $customer['city']; ?>">
            </label>
        </div>
        <div class="form-group col-md-2"><label for="campo2">Telefone</label> <label>
                <input type="text"
                       class="form-control"
                       name="customer['phone']"
                       value="<?php echo $customer['phone']; ?>">
            </label>
        </div>
        <div class="form-group col-md-2"><label for="campo3">Celular</label> <label>
                <input type="text" class="form-control"
                       name="customer['mobile']"
                       value="<?php echo $customer['mobile']; ?>">
            </label>
        </div>
        <div class="form-group col-md-1"><label for="campo3">UF</label> <label>
                <input type="text" class="form-control"
                       name="customer['state']"
                       value="<?php echo $customer['state']; ?>">
            </label>
        </div>
        <div class="form-group col-md-2"><label for="campo3">Inscrição Estadual</label> <label>
                <input type="text"
                       class="form-control"
                       name="customer['ie']"
                       value="<?php echo $customer['ie']; ?>">
            </label>
        </div>
        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a></div>
        </div>
</form>
<?php include(FOOTER_TEMPLATE); ?>

</body>
</html>

