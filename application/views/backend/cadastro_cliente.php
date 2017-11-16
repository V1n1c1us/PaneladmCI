        <!-- CONTEUDO -->
        <section id="content">
          <section class="vbox">
            <section class="scrollable wrapper w-f">
              <div class="col-md-6">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">Cadastro de Clientes</header>
                  <div class="panel-body">
                    <form role="form" id="form_cliente">
                      <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nomeCliente" class="form-control" placeholder="Nome">
                      </div>
                      <div class="form-group">
                        <label for="nome">E-mail</label>
                        <input type="text" name="email" class="form-control" placeholder="Nome">
                      </div>
                      <div class="form-group">
                        <label for="sobrenome">Telefone</label>
                        <input type="text" name="telefone" class="form-control" placeholder="Sobrenome">
                      </div>
                      <div class="form-group">
                        <label for="nome">Endereço</label>
                        <input type="text" name="endereco" class="form-control" placeholder="Nome">
                      </div>
                      <button type="submit" class="btn btn-s-md btn-primary btn-rounded">Cadastrar</button>
                    </form>
                  </div>              
                </section>
              </div>

            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
        
        <script>
          $(document).ready(function(){
            var dados = $('#form_cliente').serialize();
            var options = {
              url: '<?= base_url(); ?>' + 'admin/cliente/cadastra_cliente',
              type: 'POST',
              data: dados,
              dataType: 'html',
              success: function(data){
                $("#form_cliente").each (function(){
                  swal("Good job!", "You clicked the button!", "success");
                  this.reset();
                });
                console.log('success'+ data);
                console.log(dados);
              },
              error: function(){
                $("#form_cliente").each (function(){
                  swal("Ops!", "Algo deu Errado!", "error");
                  this.reset();
                });
              },
            }

            $('form').ajaxForm(options);
          });
        </script>