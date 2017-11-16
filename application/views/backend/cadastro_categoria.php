        <!-- CONTEUDO -->
        <section id="content">
          <section class="vbox">
            <section class="scrollable wrapper w-f">
              <div class="col-md-6">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">Cadastro de Categoria</header>
                  <div class="panel-body">
                    <form role="form" id="form_cliente">
                      <div class="form-group">
                        <label for="nomeCategoria">Nome da Categoria</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome da Categoria">
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
              url: '<?= base_url(); ?>' + 'admin/categoria/',
              type: 'POST',
              data: dados,
              dataType: 'html',
              success: function(data){
                $("#form_cliente").each (function(){
                  swal("Sucesso!", "Categoria Cadastrada com Sucesso!", "success");
                  this.reset();
                });
                console.log('success');
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