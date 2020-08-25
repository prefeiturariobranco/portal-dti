$(document).ready(function () {
    //instacinado fucoes js
    func = new Funcoes();

    function lista() {
        $('#datatable').DataTable( {
            "ajax": {
                method: "POST",
                url: "/painel/categorias/listar",
                dataSrc: ""
            },
            "columns": [
                { "data": "id", "className": "text-center"},
                { "data": "nome", "className": "text-center" },
                {"data": null, "render": function (data) {
                    return '<button class="btn-sm btn-info waves-effect waves-light editar" type="button" data-toggle="modal" data-target="#modalEdit" value = "'+data.id+'" name= "'+data.nome+'"><i class="fas fa-edit"></i></button>'+
                            ' <button class="btn-sm btn-danger waves-effect waves-light excluir" type="button" data-toggle="modal" data-target="#modalDelete" value = "'+data.id+'" name= "'+data.nome+'"><i class="fas fa-trash-alt"></i></button>  '

                    }, "className": "text-center"
                },
            ]
        } );
    }
    
    lista();

    $('body').on('click', '.btn-salvar', function (e) {
        e.stopPropagation();
        if (e.isDefaultPrevented()) {
        } else {
            e.preventDefault();
            var $this = $(this);
            $this.prop("disabled", true);

            if ($("#categoria").val() == "") {
                $("body").find(".messagemController").html(func.msgPreencherCampos);
                $this.prop("disabled", false);
                return false;
            }

            $.ajax({
                url: "/painel/categorias/cadastrar",
                method: "POST",
                dataType: "html",
                data: {
                    "dados": $("#categoria").val(),
                },
                "success": function (response) {
                    $this.prop("disabled", false);
                    if (response.trim() == "SessaoExpirada") {
                        func.modalAlert(func.msgSemPermissao);
                        return false;
                    }

                    try {
                        response = JSON.parse(response);
                    } catch (e) {
                        $("body").find(".messagemController").html(func.msgErroPadrao);
                        console.log("Parse JSON");
                        return false;
                    }

                    if (response.tipoMsg === "Erro") {
                        if (response.tipoExibicao === "console") {
                            console.log('Console Mensagem');
                            return false;
                        } else if (response.tipoExibicao === "texto") {
                            $("body").find(".messagemController").html(response.msg);
                            return false;
                        }
                    } else if (response.tipoMsg === "ok") {
                        $('#modalAdd').modal('hide');

                        $("body").find(".messagemSucesso").removeClass('d-none').html(response.msg);
                       //destruindo o datatable para criar novamente na função lista
                        var oTable = $('#datatable').dataTable();
                        oTable.fnDestroy();
                        lista();
                        // Rola o scroll do navegador para o topo
                        $('html, body').scrollTop(0);
                        //depois de 3 segundos ele escode a message de sucesso
                        setTimeout(function(){  $("body").find(".messagemSucesso").addClass('d-none'); }, 3000);
                        return false;
                    } else {
                        console.log('Ultimo else');
                        $("body").find(".messagemController").html(func.msgErroPadrao);
                        return false;
                    }
                },
                "error": function (response) {
                    $this.prop("disabled", false);
                    $("body").find(".messagemController").html(func.msgErroPadrao);
                    return false;
                }
            });

            $this.prop("disabled", false);
        }
    });
    //limpa os campos a pos o modal fechar
    $('.modal').on('hidden.bs.modal', function (e) {
        $(".btn-editar").val('');
        $(".btn-excluir").val('');
        $("body").find(".messagemController").html('');
    });
    
    $('body').on('click', '.editar', function (e) {
        var $this = $(this);
        $(".btn-editar").val($this.val());
        $(".nomeEditar").val($(this).attr('name'));
    });

    $('body').on('click', '.excluir', function (e) {
        var $this = $(this);
        $(".btn-excluir").val($this.val());
    });

    $('body').on('click', '.btn-editar', function (e) {
        e.stopPropagation();
        if (e.isDefaultPrevented()) {
        } else {
            e.preventDefault();
            var $this = $(this);
            $this.prop("disabled", true);

            if ($("#categoriaEditar").val() == "") {
                $("body").find(".messagemController").html(func.msgPreencherCampos);
                $this.prop("disabled", false);
                return false;
            }

            var dados = {
                "id": $this.val(),
                "categoria": $("#categoriaEditar").val()
            }

            $.ajax({
                url: "/painel/categorias/editar",
                method: "POST",
                dataType: "html",
                data: {
                    "dados": dados,
                },
                "success": function (response) {
                    $this.prop("disabled", false);
                    if (response.trim() == "SessaoExpirada") {
                        func.modalAlert(func.msgSemPermissao);
                        return false;
                    }

                    try {
                        response = JSON.parse(response);
                    } catch (e) {
                        $("body").find(".messagemController").html(func.msgErroPadrao);
                        console.log("Parse JSON");
                        return false;
                    }

                    if (response.tipoMsg === "Erro") {
                        if (response.tipoExibicao === "console") {
                            console.log('Console Mensagem');
                            return false;
                        } else if (response.tipoExibicao === "texto") {
                            $("body").find(".messagemController").html(response.msg);
                            return false;
                        }
                    } else if (response.tipoMsg === "ok") {
                        $('#modalEdit').modal('hide');

                        $("body").find(".messagemSucesso").removeClass('d-none').html(response.msg);
                       //destruindo o datatable para criar novamente na função lista
                        var oTable = $('#datatable').dataTable();
                        oTable.fnDestroy();
                        //carrega a lista atualizada
                        lista();
                        // Rola o scroll do navegador para o topo
                        $('html, body').scrollTop(0);
                        //depois de 3 segundos ele escode a message de sucesso
                        setTimeout(function(){  $("body").find(".messagemSucesso").addClass('d-none'); }, 3000);
                        return false;
                    } else {
                        console.log('Ultimo else');
                        $("body").find(".messagemController").html(func.msgErroPadrao);
                        return false;
                    }
                },
                "error": function (response) {
                    $this.prop("disabled", false);
                    $("body").find(".messagemController").html(func.msgErroPadrao);
                    return false;
                }
            });
            $this.prop("disabled", false);
        }
    });
    $('body').on('click', '.btn-excluir', function (e) {
        e.stopPropagation();
        if (e.isDefaultPrevented()) {
        } else {
            e.preventDefault();
            var $this = $(this);
            $this.prop("disabled", true);

            $.ajax({
                url: "/painel/categorias/deletar",
                method: "POST",
                dataType: "html",
                data: {
                    "dados": $this.val(),
                },
                "success": function (response) {
                    $this.prop("disabled", false);
                    if (response.trim() == "SessaoExpirada") {
                        func.modalAlert(func.msgSemPermissao);
                        return false;
                    }

                    try {
                        response = JSON.parse(response);
                    } catch (e) {
                        $("body").find(".messagemController").html(func.msgErroPadrao);
                        console.log("Parse JSON");
                        return false;
                    }

                    if (response.tipoMsg === "Erro") {
                        if (response.tipoExibicao === "console") {
                            console.log('Console Mensagem');
                            return false;
                        } else if (response.tipoExibicao === "texto") {
                            $("body").find(".messagemController").html(response.msg);
                            return false;
                        }
                    } else if (response.tipoMsg === "ok") {
                        $('#modalDelete').modal('hide');

                        $("body").find(".messagemSucesso").removeClass('d-none').html(response.msg);
                       //destruindo o datatable para criar novamente na função lista
                        var oTable = $('#datatable').dataTable();
                        oTable.fnDestroy();
                        lista();
                        // Rola o scroll do navegador para o topo
                        $('html, body').scrollTop(0);
                        //depois de 3 segundos ele escode a message de sucesso
                        setTimeout(function(){  $("body").find(".messagemSucesso").addClass('d-none'); }, 3000);
                        return false;
                    } else {
                        console.log('Ultimo else');
                        $("body").find(".messagemController").html(func.msgErroPadrao);
                        return false;
                    }
                },
                "error": function (response) {
                    $this.prop("disabled", false);
                    $("body").find(".messagemController").html(func.msgErroPadrao);
                    return false;
                }
            });

            $this.prop("disabled", false);
        }
    });
});